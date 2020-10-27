<?php

    require_once "../Dao/Conexao.php";

    class LivroDao
    {
        private static $instance;

        //singleton
        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                self::$instance = new LivroDao();
            }

            return self::$instance;
        }

        //functions
        public function createBook(Livro $livro)
        {
            $connDatabase = Conexao::getInstance();
        
            $sql = "INSERT INTO livro (nome) VALUES (?)";
            $query = $connDatabase->prepare($sql);
        
            $query->bindValue(1, $livro->getNome());
            $query->execute();
        
            $connDatabase = null;
            header("location: ../View/index.php");
        }

        public function readBook()
        {
            $connDatabase = Conexao::getInstance();

            $sql = "SELECT * FROM livro";
            $tabela = $connDatabase->query($sql);

            if($tabela){
                foreach($tabela as $linha){
                    echo "<p>{$linha['id']} | {$linha['nome']}</p>";
                }
            }

            $connDatabase = null;

        }

        public function updateBook(Livro $livro, $id)
        {
            $connDatabase = Conexao::getInstance();
    
            $sql = "UPDATE livro SET nome = ? WHERE id = ?";
            $query = $connDatabase->prepare($sql);
            $query->bindValue(1, $livro->getNome());
            $query->bindValue(2, $id);
            $query->execute();

            $connDatabase = null;
            header("location: ../View/index.php");
        }

        public function deleteBook($id)
        {
            $connDatabase = Conexao::getInstance($id);

            $sql = "DELETE FROM livro WHERE id = ?";
            $query = $connDatabase->prepare($sql);
            $query->bindValue(1, $id);
            $query->execute();

            $connDatabase = null;
            header("location: ../View/index.php");
        }
    }

?>
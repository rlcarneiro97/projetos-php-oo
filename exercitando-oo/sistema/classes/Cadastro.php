<?php

    class Cadastro
    {

        // singleton
        private static $instance;

        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                self::$instance = new Cadastro();
            }

            return self::$instance;
        }

        private $nome;
        private $telefone;
        private $email;

        public function inserir(Cadastro $cadastro)
        {
            $connDatabase = Conexao::getInstance();
        
            $sql = "INSERT INTO cadastro (nome, telefone, email) VALUES (?, ?, ?)";
            $query = $connDatabase->prepare($sql);
        
            $query->bindValue(1, $cadastro->getNome());
            $query->bindValue(2, $cadastro->getTelefone());
            $query->bindValue(3, $cadastro->getEmail());
            $query->execute();
        
            $connDatabase = null;
            header("location: ../sistema/lista_ususarios.php");
        }

        public function exibir()
        {
            $connDatabase = Conexao::getInstance();

            $sql = "SELECT * FROM cadastro";
            $tabela = $connDatabase->query($sql);

            if($tabela)
            {
                echo "
                <table border='1'>
                    <tr>
                        <td>ID</td>
                        <td>NOME</td>
                        <td>TELEFONE</td>
                        <td>EMAIL</td>
                    </tr>
                ";

                foreach($tabela as $linha)
                {
                    $id = $linha['id'];
                    echo "
                    <tr>
                        <td>" . $linha['id'] . "</td>
                        <td>" . $linha['nome'] . "</td>
                        <td>" . $linha['telefone'] . "</td>
                        <td>" . $linha['email'] . "</td>
                        <!-- <td><a href='exemploDelete.php?id=$id'>Alterar</a></td> -->
                        <!-- <td><a href='exemploDelete.php?id=$id'>Excluir</a></td> -->
                    </tr>";
                }

                echo "</table>";
            }

            $connDatabase = null;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }
    }

?>
<?php

    // require_once "../contrato/autoload.php";

    // use Interfaces\ICaracteristicas;
    // use Classes\Veiculo;
    // use Classes\Carro;
    // use Classes\Moto;

    require_once "../contrato/interface/ICaracteristicas.php";
    require_once "../contrato/classes/Veiculo.php";
    require_once "../contrato/classes/Moto.php";
    require_once "../contrato/classes/Carro.php";

    if($_POST)
    {
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $tipoVeiculo = $_POST['tipo-veiculo'];
    
        if(is_string($nome) && !is_numeric($nome) && is_string($marca) && !is_numeric($marca) && is_string($modelo) && is_numeric($tipoVeiculo))
        {
            try
            {
                if($tipoVeiculo === "1")
                {
                    // echo "<p>{$nome}</p><p>{$marca}</p><p>{$modelo}</p><p>{$tipoVeiculo}</p>";
                    $veiculo = new Moto($nome, $marca, $modelo);
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do veiculo(Moto)!", $e->getMessage(), "\n";
            }
    
            try
            {
                if($tipoVeiculo === "2")
                {
                    // echo "<p>{$nome}</p><p>{$marca}</p><p>{$modelo}</p><p>{$tipoVeiculo}</p>";
                    $veiculo = new Carro($nome, $marca, $modelo);
                }
    
            }catch(Exception $e)
            {
                echo "Erro na criacao do veiculo(Carro)!", $e->getMessage(), "\n";
            }
    
            $veiculo->exibeNome();
            $veiculo->exibeMarca();
            $veiculo->exibeModelo();
    
        }else
        {
            echo "<p>Valores do formulário inválidos!</p>";
        }
    
    }else
    {
        echo "<p>Nenhum dado for recebido pelo Formulário</p>";
    }

?>
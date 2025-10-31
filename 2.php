<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastro</title>
    <style>
        /* ===== Estilo geral ===== */
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* ===== Caixa principal ===== */
        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 360px;
            text-align: center;
        }

        h2 {
            color: #444;
            margin-bottom: 15px;
        }

        h3 {
            color: #2575fc;
            margin-bottom: 10px;
        }

        /* ===== Texto e informações ===== */
        p, br {
            line-height: 1.6;
        }

        hr {
            margin: 20px 0;
            border: none;
            height: 1px;
            background-color: #ddd;
        }

        /* ===== Botão de voltar ===== */
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background-color: #2575fc;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #1a5edc;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <?php 
        if (isset($_POST['cliente'])) {
            $cliente = $_POST["cliente"];
            $telefone = $_POST["telefone"];
            $aparelho = $_POST["aparelho"];
            $atendimento = $_POST["atendimento"];
            $problema = $_POST["problema"];

            

            echo "<h3>Dados recebidos:</h3>";
            echo "Nome do Cliente: <strong>$cliente</strong><br>";
            echo "Telefone: <strong>$telefone</strong><br>";
            echo "Aparelho: <strong>$aparelho</strong><br>";
            echo "Dia para atendimento: <strong>$atendimento</strong><br>"; 
            echo "Problema: <strong>$problema</strong><br>";
            
        } else {
            echo "Nenhum dado recebido.";
        }

        
        ?>

        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
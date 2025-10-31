<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        /* ===== Estilo geral da página ===== */
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

        /* ===== Caixa do formulário ===== */
        form {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 320px;
        }

        /* ===== Título ===== */
        h2 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        /* ===== Labels e inputs ===== */
        label {
            font-weight: 500;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
            transition: 0.2s;
        }

        /* ===== Efeito ao focar ===== */
        input:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 4px rgba(37, 117, 252, 0.5);
        }

        /* ===== Botão ===== */
        button {
            width: 100%;
            padding: 12px;
            background-color: #2575fc;
            color: white;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        /* ===== Efeito hover no botão ===== */
        button:hover {
            background-color: #1a5edc;
        }
    </style>
</head>
<body>
    <form action="2.php?dados=cliente&versao=1.0" method="POST">
        <h2>Cadastro</h2>

        <label>Digite o seu Nome:</label><br>
        <input type="text" name="cliente" required><br><br>

        <label>Digite o seu Telefone:</label><br>
        <input type="number" name="telefone" required><br><br>

        <label>Digite seu tipo de aparelho:</label><br>
        <input type="text" name="aparelho" required><br><br>

        <label>Qual sua data ideal para atendimento:</label><br>
        <input type="date" name="atendimento" max="10" required><br><br>

        <label>Qual o problema:</label><br>
        <input type="text" name="problema" max="10" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
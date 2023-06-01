<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Formulário</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST['email'];
        $idade = $_POST["idade"];
        $hobby = $_POST['hobby'];

        if (strlen($nome) > 6) {
            echo "<table>";
            echo "<tr><th>Campo</th><th>Valor</th></tr>";
            echo "<tr><td>Nome</td><td>$nome</td></tr>";
            echo "<tr><td>Email</td><td>$email</td></tr>";
            echo "<tr><td>Idade</td><td>$idade</td></tr>";
            echo "<tr><td>Hobby</td><td>$hobby</td></tr>";
            echo "</table>";
        } else {
            echo "<script>";
            echo "window.location.href = 'formulario.html';";
            echo "alert('Nome informado menor que 6 caracteres. Preencha novamente.');";
            echo "</script>";
            exit; 
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];

        if ($idade < 18) {
            echo "<script>";
            echo "window.location.href = 'formulario.html';";
            echo "alert('Menor de idade.');";
            echo "</script>";
            exit;
        }
    }
    ?>
</body>
</html>

<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Painel</title>
    <style>
      
        body, a {
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            text-align: center;
            margin: 300px 0px 0px 0px;
            color:white;
            
        }
        
    </style>
</head>
<body>
    <h1>Marcação Registrada <?php echo $_SESSION['nome_funcionario']; ?> !</h1> 
    <br>
    
    <a href="logout.php">Fechar</a>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Menu</title>
    <style>
      
        body{
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed
        }
        
    </style>

</head>
<body >
    <div>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="menu.php">Menu Principal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastrar.php">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lista.php">Lista</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Procurar">
              <button class="btn btn-light" type="button">Procurar</button>
            </form>
          </div>
        </div>
      </nav>
    </div><br><br>
    <div style="background: rgba(0, 0, 0, 0.404); margin: 50px 50px 50px 50px; border-radius: 15px; color: white;"> 
      <h2 style="text-align: center;">Gerencie o controle de horas extras e banco de horas</h2>
      <p style="text-align: center;">As informações da jornada dos colaboradores ficam centralizadas na plataforma. <br> É possível acompanhar o nível de pontualidade, atrasos, horas extras, banco de horas e horas faltantes em um só luga</p><br>
      <h2 style="text-align: center;">Faça o tratamento do ponto e fechamento da folha ponto em poucos cliques</h2>
        <p style="text-align: center;">Visualize a jornada de trabalho em tempo real, aprove solicitações de ajustes, abonos de jornada e acompanhe o desempenho de cada colaborador. <br> O fechamento da folha é feito em poucos cliques.</p><br>
        <h2 style="text-align: center;">Tenha uma gestão inteligente no controle de frequência</h2>
        <p style="text-align: center;">Controle de ponto por planilhas? A Pontomais elimina essa necessidade. <br> O cadastro e registro de ponto do colaborador é feito diretamente na plataforma, assim como o gerenciamento de jornadas, turnos e escalas.</p><br>
    
    
    
   </body>
</html>
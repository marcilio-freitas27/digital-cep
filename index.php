<!DOCTYPE html>
<html lang="en" style="height:100%;">
    <?php
        session_start();
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Busca Info</title>
    </head>

    <body>
        <div  class="container-fluid center">
            <h1><legend>Digital Cep</legend></h1>
        </div>
        <?php 
                if (isset($_SESSION['erro'])){
                    echo "<center>" . $_SESSION['erro'] . "</center><br>";
                    unset($_SESSION['erro']);
                }
            ?>
        <div class="centralizar form">
            <form action="example.php" method="POST" role="form">
                <div class="container-fluid form-group">
                    <p class="texto">Qual o cep? <input type="text" class="form-control" name="cep" placeholder="Insira o cep"></p>
                    <p class="texto">Qual a extensão? <select name="ext" class="form-select" aria-label="Default select example"></p>
                        <option selected>Escolha a extensão</option>
                        <option value="array">array</option>
                        <option value="xml">xml</option>
                        <option value="json">json</option>
                    </select>
                </div>
                <div>
                    <input type="submit" class="btn-default" value="Exibir consulta">
                    <br></br>
                </div>
            </form>
        </div>
        <br></br>
        <div class="container">
            <div class="row">
                <?php
                    if (isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
        </div>
    </body>
</html>
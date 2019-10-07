<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Formulario de Cadastro De Proprietario</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form method ="get" action "grava.php" class = "formulario">
                            <h2 class="text-center text-info">Formulario de Cadastro De Proprietario</h2>
                            <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Nome do Proprietario:</label><br>
                               <input type="text" name="fnome" placeholder="NOME" required class = "input"><br>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                               <input type="email" name="femail" placeholder="EMAIL" required class = "input"><br>
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Mensagem:</label><br>
                               <textarea name ="fmsg" rows="5" cols="48" required class="input" placeholder="MENSAGEM" ></textarea><br>
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="submit" value ="GRAVAR" class ="botform" >
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

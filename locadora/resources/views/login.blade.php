<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css da aplicacao -->
        <link href="/css/login.css" rel ="stylesheet">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

     <div class="col-md-6 offset-md-3">
         
         <h2>Login</h2>
    <div class="login">
    <form action="/login" method="POST" class="inputlogs">
                @csrf
            <div class="form-group">
                    <label for="title">E-mail:</label>
                    <input type="text" class="form-control" name="loginemail" placeholder="E-mail">
            </div>
                
        <div class="form-group">
                    <label for="title">Senha:</label>
                    <input type="text" class="form-control" name="loginpassword" placeholder="Senha">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Login">
        
    </form>
    <form action="/gotore" method="POST">
        @csrf
        <input type="submit" class="btn btn-primary" value="Ainda não me registrei">

    </form>

    </div>             
     </div>

</body>
</html>

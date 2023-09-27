<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- css da aplicacao -->
        <link href="/css/login.css" rel ="stylesheet">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>



        <div class="col-md-6 offset-md-3">
            <h2>Cadastrar</h2>
            <div class="login">

                <form action="/cadastro" method="POST" class="inputlogs">
                    
                    @csrf
                    <div class="form-group">
                        <label for="title">Nome:</label>
                        <input name="name"  class="form-control" type="text" placeholder="Nome" >
                    </div>
                    <div class="form-group">
                        <label for="title">E-mail:</label>
                        <input name="email"  class="form-control" type="text" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label for="title">Senha:</label>
                        <input name="password"  class="form-control" type="text" placeholder="Senha">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Cadastro">
                </form>
            </div>
        </div>


</body>
</html>
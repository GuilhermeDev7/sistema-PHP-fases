<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/cadastrar.css">
        <title>Cadastrar</title>
        
</head>
<body>
      <section class='container'>
        <div>
<form class='form' action="../back/cadastrar.php" method="POST">
<h2>Cadastrar</h2>
<br><br>
 <label>Nome</label><br>
 <input type="text" autofocus name="nome"><br><br>

 <label>Endereço</label><br>
 <input type="text" name="endereco"><br><br>

 <label>Email</label><br>
 <input type="text" name="email"><br><br>

 <label>Senha</label><br>
 <input type="password" name="senha"><br><br>

<select name="adm">
 <option value="0">Colaborador</option>
 <option value="1">Administrador</option>
</select>
<br><br>
 
 <button type="submit">Cadastrar</button>
</form>


<a href="login.php">Login</a>

        </div>
      </section>
      
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sing-in</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <main class="bg-sign-in d-flex justify-content-center align-items-center">
      <div class=" form-sign-in bg-white mt-2 h-auto mb-2 text-center pt-2 pe-4 ps-4 d-flex flex-column">
        <h1 class="E-classe text-start ms-3 ps-1" >E-classe</h1>
        <div>
          <h2 class=" sign-in text-uppercase">Logar</h2>
        <p>Entre com suas credencias para acessar a conta</p>
        </div>
        <?php
          if(isset($_GET['error'])){
            if($_GET['error'] == "por favor digite seu e-mail ou senha"){
              echo '<div sclass="alert alert-danger" role="alert">
              por favor digite seu e-mail ou senha
          </div>';
            }
            elseif($_GET['error'] == "e-mail ou senha não encontrada"){
              echo '<div class="alert alert-danger" role="alert">
              e-mail ou senha não encontrada
          </div>';
            }
          }    
        ?>
        <form method="POST" action="login.php">
          <div class="mb-3 mt-3 text-start">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php  if(isset($_COOKIE['email'])){echo $_COOKIE['email']; }?>">
          </div>
          <div class="mb-3 text-start">
            <label for="pwd">Senha:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" value="<?php  if(isset($_COOKIE['password'])){echo $_COOKIE['password']; }?>" autocomplete="on">
          </div>
          <div class="mb-3 form-check d-flex gap-2">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
  </div>
          <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">Logar</button>
          <p class="mt-4">Esqueceu sua senha? <a href="resetpass.php">Resetar Senha</a></p>
          
        </form>
        <button href="" class="btn-register btn btn-success mb-3">Criar conta</button>
     </div>

   </main>

          <div class="bg"></div>

   <div class="register d-flex justify-content-center align-items-center">
   <div class="sign-up bg-white mt-2 h-auto mb-2 text-center pt-4 pb-3 pe-4 ps-4 d-flex flex-column">
       <div>
           <h2 class=" sign-in text-uppercase">Logar</h2>
       </div>
       <form method="POST" id="signup" action="createaccout.php">
           <div class="mb-3 mt-3 text-start">
               <label class="label-signup" for="username">usuario: <span class="valid"></span></label>
               <input type="text" class="form-control" id="username" placeholder="joaosilva" name="username">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="email">Email: <span class="valid"></span></label>
               <input type="email" class="form-control" id="Email" placeholder="joaosilva@mail.com" name="email">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="pwd">Senha: <span class="valid"></span></label>
               <input type="password" class="form-control" id="Pwd" placeholder="senha" name="pass" autocomplete="on">
           </div>
           <div class="mb-3 text-start">
               <label class="label-signup" for="conPwd">Confirme Senha: <span class="valid"></span></label>
               <input type="password" class="form-control" id="conPwd" placeholder="Confirme" name="conPass" autocomplete="on">
           </div>
           <button type="submit" name="submit" class="btn text-white w-100 text-uppercase">inscrever-se</button>
           <p class="mt-4">já esta registrado? <a href="index.php">Logar</a></p>
       </form>
   </div>
   </div>
   <script src="/js/bootstrap.bundle.js"></script>
   <script src="./js/validation.js"></script>
</body>
</html>
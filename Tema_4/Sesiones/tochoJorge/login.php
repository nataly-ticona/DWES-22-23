<?php
require('db.php');
session_start();

function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = "";
$password = "";
$errorList = [];

if (isset($_GET['url'])) {
  $url = $_GET['url'];
}else if(isset($_POST['url'])){
  $url = $_POST['url'];
}

if(isset($_POST["submit"])) {
    if(isset($_POST["login"])){
        $login = clean_input($_POST["login"]);
    }

    if (!filter_var($login, FILTER_VALIDATE_EMAIL)) {
        $errorList[] = "Usuario inválido";
        //http://php.net/manual/es/filter.filters.php
    }


    if(isset($_POST["password"])){
        $password = clean_input($_POST["password"]);
    }
    $consulta = $mbd->prepare("SELECT * FROM usuarios WHERE email = :email: LIMIT 1");
    $consulta->execute([':email'=>$login]);
    
    $user = $consulta-> fetch();


    if( isset($user) && password_verify($password, $user['pass'])){
      $_SESSION['user']=$login;
      if ($url!='') {
        header('Location: '.$url);
      }else{
        header('Location: premio.php');
      }
    }else{
        $errorList[] = "Clave errónea";
    }
}


if(isset($_GET["error"])){
    $errorList[] = $_GET["error"];
}

?>
<html>
<head>
  <link rel="stylesheet" type="text/css" media="all" href="css/estilo.css">
</head>
<body>
<form action="login.php" method="post" class="login">
    <p>
      <label for="login">Email:</label>
      <input type="text" name="login" id="login" value="<?=$login?>">
      <input type="hidden" name="url" id="url" value="<?=$url?>">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">
    </p>

    <?php if (count($errorList)>0) { ?>
    <p>
      <?php foreach($errorList as $error) { ?>
        <div class="error"><?= $error ?></div>
      <?php } ?>
    </p>
    <?php }?>

    <p class="login-submit">
      <label for="submit">&nbsp;</label>
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
</form>
</body>
</html>

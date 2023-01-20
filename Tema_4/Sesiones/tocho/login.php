
<?php
//mio
session_start();

spl_autoload_register(function($class){
    $path = "./";
    $file = str_replace("\\", "/", $class);

    require("$path{$file}.php");
});

$conn = Conn::singleton()->getConn();
//ya ta

function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$login = "";
$pass = "";

//mio
$url = isset($_POST['url'])?$_POST['url']:'';
if(empty($url)) {
    $url = isset($_GET['url'])?$_GET['url']:Conn::singleton()->encrypt("./publico.php");;
}
//ya

$errorList = [];


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

    // $us=$_POST['usuario'];
    // $pass=$_POST['pass'];
    // $sql="SELECT * FROM usuarios WHERE user = ? AND password=?";

    if( $login == $user['email'] && password_verify($password, $user['password']) ){
      $_SESSION['email'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['user'] = explode("@", $login)[0];
        header('Location: '.Conn::singleton()->decrypt($url));
        exit;
    }else{
        $errorList[] = "Clave errónea";
    }
}


if(isset($_GET["error"])){
    $errorList[] = $_GET["error"];
}


//MIO
function validarPsswd($password){
  
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
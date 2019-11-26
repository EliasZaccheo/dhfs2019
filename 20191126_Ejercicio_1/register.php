<?PHP
  $username = null;
  $name=null;
  $email=null;
  if ($_POST){
    if ((strlen($_POST["name"])>0) &&
        (strlen($_POST["name"])<50) &&
        (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) &&
        (strlen($_POST["email"])<50) &&
        (strlen($_POST["username"])>0) &&
        (strlen($_POST["username"])<50) &&
        (strlen($_POST["password"])<50) &&
        (strlen($_POST["password"])>6)
      ){
      $usuarios=json_decode(file_get_contents("usuarios.json"),true);
      $usuarios[]=[
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "email" => $_POST["email"],
        "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
      ];
      file_put_contents("usuarios.json",json_encode($usuarios));
      echo "Bienvenido";
      //header('Location: bienvenido.php');
      //exit;
    }else{
      $name = strlen($_POST['name'])>0 ? $_POST['name'] : null;
      $username = strlen($_POST['username'])>0 ? $_POST['username'] : null;
      $email= filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ? $_POST["email"] : null;
    }

  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='register.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>



                <div class='short_explanation'>* campos requeridos</div>


                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?= $name ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?= $email ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $username ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>

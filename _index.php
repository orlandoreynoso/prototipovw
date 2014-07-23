<?php 
 
    session_start();

     
    include('librerias/conexion-clase.php');

    function verificar_login($user,$password,&$result)
    {

  //   include('librerias/conexion-clase.php');
 //    $coneccion = new Conexion();

    echo   $sql ="SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $password AND NOMBRES LIKE2('$user')";        
//    echo   $sql = "SELECT * FROM usuario WHERE usuario = '$user' and clave = '$password'";

//echo        $rec = mysql_query($sql);

echo    $rec = oci_parse($conn, $sql);
echo 'aqui viene el execute <br>';      
    //  echo  oci_execute($sql);
echo 'otro ejecute<br>';


echo        $count = 0;



//        while($row = mysql_fetch_object($rec))
        while($row = oci_fetch_object($result))
        {
            $count++;
            $result = $row;
        }

        if($count == 1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }


    if(!isset($_SESSION['userid']))
    {
        echo 'ENTRO EN EL IF';

        if(isset($_POST['login']))
        {

        echo 'ENTRO EN EL 2DO IF';

            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
                $_SESSION['userid'] = $result->idusuario;
                $_SESSION['username'] = $result->usuario;
                $_SESSION['name'] = $result->nombres;
                $_SESSION['type'] = $result->type;
                    header("location:index.php");

        echo 'ENTRO EN EL 3R IF';

            }
            else
            {
                echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
            }
        }
 
        ?>
    <style type="text/css">
    *{
      font-size: 14px;
      font-family: sans-serif;
    }
    form.login {
        background: none repeat scroll 0 0 #F1F1F1;
        border: 1px solid #DDDDDD;
        margin: 0 auto;
        padding: 20px;
        width: 278px;
    }
    form.login div {
        margin-bottom: 15px;
        overflow: hidden;
    }
    form.login div label {
        display: block;
        float: left;
        line-height: 25px;
    }
    form.login div input[type="text"], form.login div input[type="password"] {
        border: 1px solid #DCDCDC;
        float: right;
        padding: 4px;
    }
    form.login div input[type="submit"] {
        background: none repeat scroll 0 0 #DEDEDE;
        border: 1px solid #C6C6C6;
        float: right;
        font-weight: bold;
        padding: 4px 20px;
    }
    .error{
      color: red;
        font-weight: bold;
        margin: 10px;
        text-align: center;
    }
    </style>
           <form action="" method="post" class="login">
        <div><label>Username: </label><input name="user" type="text" value="ORLANDO"></div>
        <div><label>Password: </label><input name="password" type="password" value="100"></div>
        <div><input name="login" type="submit" value="login"></div>
      </form>
        <?php


    }
    else
    
    {

        echo 'Su usuario ingreso correctamente.';
        echo '<a href="logout.php">Logout</a>';
    }
?>
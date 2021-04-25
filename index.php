<?php
session_start();

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }

</style>

<body>


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="index.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>



                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
								<input class="btn btn-lg btn-success btn-block" type="submit" value="Registration" name="reg" >

                            </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("db.php");
if(isset($_POST['reg']))
{
header ("location:insert.php");
}
if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $query="select * from users where email='".$_POST['email']."' and password='".$_POST['pass']."'";
     
    $result=mysqli_query($con,$query);

      if(mysqli_fetch_assoc($result)){
                    $_SESSION['email']=$_POST['email'];
                    header("location:view.php");
                }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
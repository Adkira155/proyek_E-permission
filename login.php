<?php
	session_start();
 include 'koneksi.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- font awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
      <!-- css -->
   <!--   <link rel="stylesheet" type="text/css" href="asset/css/style.css"> -->
<style>
body {
  width: 100%;
  height: 100% auto;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  display: grid;
  justify-items: center;
  align-items: center;
}

.box-login{
margin: 60px 0;
background-color:#9DB2BF;
width: 701px;
height: 450px;
padding-bottom: 10px;
display: grid;
justify-items: center;
}

img
{
  width: 120px;
  height: 120px;
  margin-top: 20px;
  margin-bottom: -10px;
  border-radius: 90%;
}

.login {
  display: grid;
  justify-items: center;
}

.login-form::placeholder {
  text-align: center;
}

.login-form {
  border: none;
  width: 342px;
  height: 40px;
  border: 1px solid;
  margin-top: -25px;
  margin-bottom: 10px;
}


#submit {
  width: 200px;
  height: 40px;
  padding: 5px;
  border: none;
  border-radius: 15px;
  color: white;
  font-weight: bold;
  background-color: #526D82;
  margin-left: 150px;
  margin-right: 150px;
  margin-top: -30px;
}

/* responsive */
@media (max-width: 700px) {
  body{
    overflow: hidden;
  }
  .box-login {
    width: 400px;
    height: auto;
    margin-left: 0%;
    /* margin-top: 20%; */
  }
  .login{
    width: 350px;
    margin: 0;
    }
  .login-form{
    margin: 0;
    width: 250px;
  }
  #submit{
    margin: 0;
  }

}
.alert {
	padding: 0 40px;
	border: 1px solid;
}
.alert-error {
	background-color: #F48484;
	border: 1px solid #850000;
	color: #850000;
}
.alert-success {
	background-color: #9DC08B;
	border: 1px solid #5D9C59;
	color: #40513B;
}
    </style>
</head>
<body class="body-login">
    <div class="col-6 g-3">
<div class="box-login">
    <div class="logo">
        <img src="logo.jpeg">
    </div>
    <br>
    <?php 
	if (isset($_GET['msg'])) {
	echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
	}
	?>
    <br>
        <form action="" method="POST" class="login">
        <input type="text" name="user" class="login-form" placeholder="Username">
        <br>
      <input type="password" name="password" class="login-form" placeholder="Password">
      <br>
      <input class="btn" type="submit" name="submit" value="Login" id="submit" onClick="return confirm('Apakah anda sudah yakin?')">
    </form>

        <?php

					if(isset($_POST['submit'])){
						$user = mysqli_real_escape_string($conn, $_POST['user']);
						$pass = mysqli_real_escape_string($conn, $_POST['password']);


                        $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username ='".$user."' ");
                        if (mysqli_num_rows($cek) > 0){
    
                                $d = mysqli_fetch_object($cek);
                            if (md5($pass) == $d-> password ){


					//	$d = mysqli_fetch_object($cek);
						//if ($pass == $d->password){
						
								$_SESSION['status_login']	= true;
								$_SESSION['uid'] 			=$d->id;
								$_SESSION['uname'] 			=$d->username;
								$_SESSION['uname'] 			=$d->username;
								$_SESSION['ulevel'] 		=$d->level;

								echo "<script>window.location = 'dashboard/dashboard.php'</script>";

						} else{
							echo '<div class="alert alert-error">Password Anda Tidak Sesuai <br> <a class="heh" href="login.php"><center>Kembali</center></a></div>';
						}
					}else {
						echo '<div class="alert alert-error" >Username Tidak Ditemukan <br> <a  class="heh" href="login.php"><center>Kembali</center></a></div>';

						//echo "<script>window.location = 'login.php'</script>";
					}
				}
				 ?>
            <div class="links">
               Belum Punya Akun<a style="color:#ffffff;" href="registrasi.php"> Daftar Now</a>
            </div>
    </div>
    </div>
</body>
</html>
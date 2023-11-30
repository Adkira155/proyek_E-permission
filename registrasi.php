<?php
	session_start();
 include 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
   <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<!-- font awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <!-- css -->
  <!--  <link rel="stylesheet" type="text/css" href="asset/css/style.css"> -->
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}
.body-login{
    background-color: #ffffff;
}
.container{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 90vh;
}
.box{
    width: 650px;
    background-color: #9DB2BF;
    display: flex;
    flex-direction: column;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 0 128px 0 rgb(0, 0, 0, 0, 1), 0 32px 64px;
}
.form-box header{
    font-size:25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #ededed;
    margin-bottom: 10px;
    color: #ededed;
}
.form-box .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
}
.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid black;
    outline: none;
}
label{
    color: #ededed;
}
i{
    display: flex;
    align-self: center;
    width: 50px;
    height: 50px;
    transform: translate(-50% -50%);
}
.btn{
    height: 35px;
    background-color: #526D82;
    border: 0;
    border-radius: 5px;
    color: #ededed;
    font-size: 15px;
    cursor: pointer;
    margin-top: 10px;
    padding: 0 10px;
}
.btn:hover{
    background-color: rgba(77, 83, 96, 0.469);
    transition: all .2s ease;
    color: #ededed;
}
.submit{
    width: 100%;
}
.links {
    margin-bottom: 15px;
}
.alert {
	padding: 10px 16px;
	border: 1px solid;
}
.alert-error {
	background-color: #F48484;
	border: 1px solid #850000;
	color: #850000;
}
.form-group{
	margin-bottom: 15px;
}
.form-group label{
	display: block;
	margin-bottom: 8px;
}
.form-group .input-control{
	padding: 10px 16px;
	width: 100%;
	font-size: 16px;
	border: 1px solid #ddd;
}

.alert {
	padding: 10px 16px;
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
    <div class="container">
    <div style="margin-top: 50px;" class="box form-box">
        <header>Form Registrasi</header>
        <form action="registrasi.php" method="POST">
            <div class="field input">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="" placeholder="Nama Lengkap" required maxlength="50">
            </div>

            <div class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="" placeholder="Username" required maxlength="50">
            </div>

            <div class="field input">
                <label for="username">Password</label>
                <input type="password" name="password" id="" placeholder="Password" required maxlength="20">
            </div>

            <div class="form-group field input">
					<label>Status</label>
					<select name="level" class="input-control">
						<option value="">User</option>
					</select>
				</div>

            <div class="field">
                <input class="btn" type="submit" name="submit" value="registrasi" onClick="return confirm('Apakah anda sudah yakin?')">
            </div>
            <div class="links">
                Sudah punya akun? <a style="color:#e0f4ff;" href="login.php">Login Disini</a>
            </div>
        </form>
                 
        <?php 

if (isset($_POST['submit'])) {
    
    $nama = addslashes (ucwords($_POST['nama_lengkap']));
    $user = addslashes ($_POST['username']);
    $pass= addslashes (MD5($_POST['password']));
    $status = $_POST['level'];


    $cek = mysqli_query($conn, "SELECT nama_lengkap FROM pengguna WHERE nama_lengkap = '".$nama."' ");
    
    if (mysqli_num_rows($cek) > 0) {
        echo '<div class="alert alert-error">Usernama sudah digunakan</div>';
    }else{

    $simpan = mysqli_query($conn, "INSERT INTO pengguna VALUES(
        null,
        '".$nama."',
        '".$user."',
        '".$pass."',
        '".$status."',
        null,
        null
)");
    if ($simpan) {
        echo '<div class="alert alert-success">Data Disimpan</div>';
    }else{
        echo '<div class="alert alert-error"> Gagal disimpan </div>'.mysqli_error($conn);
    }
}
}
?>
    </div>
    </div>
</body>
</html>
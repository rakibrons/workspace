<?php
$id_ok = "user01";
$password_ok = "pass01";


session_start();


$id ="";
if (isset($_REQUEST["id"])) 
{
    $id = $_REQUEST["id"];
}
$password ="";
if (isset($_REQUEST["password"])) {
    $password = $_REQUEST["password"];
}
$isLogined = false;
if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
    $isLogined = true;
}

//print_r($_SESSION);
echo "loger: ".$_SESSION["id"];

?>
<style>
   .size1 {height="100px";
       
   }
    
</style>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ccmc-04</title>
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
	<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
    <div class="size1">
	<h1>簡単なユーザ認証</h1>
	<?php if ($isLogined === true) { ?>
	<p>ようこそ、<?= $id ?>  さん</p>
	<p><a href="logout.php">ログアウトする</a></p>
    <?php } else { ?>
    <p><a href="entry.html">ログインページ</a></p>
	<?php }?>
	</div>
</body>
</html>
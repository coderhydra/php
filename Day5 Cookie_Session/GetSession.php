<?php
session_start();
$userid=$_SESSION["userid"];
$username=$_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
등록된 세션(userid) : <?=$userid?><br>
등록된 세션(username) : <?=$username?><br>
</body>
</html>
세션에 저장결과<br>
<a href="UnsetSession.php">세션 삭제</a>
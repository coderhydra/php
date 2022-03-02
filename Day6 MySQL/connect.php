<?php
// mysql 연결
$host = 'localhost:3306';
$user = 'root';
$pw = '52273178';
$dbName = 'study_db';
$conn = new mysqli($host, $user, $pw, $dbName);

if($conn){
    echo "MySQL 접속 성공";
}else{
    echo "MySQL 접속 실패";
}

mysqli_close($conn);
?>

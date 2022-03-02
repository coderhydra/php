<?php
$servername = "localhost";
$user = "root";
$password = "52273178";
$dbname = "study_db";
$connect = mysqli_connect($servername, $user, $password, $dbname);
if (!$connect) { die("서버와의 연결 실패! : ".mysqli_connect_error()); }
$sql = "DELETE FROM user WHERE uid = 'neo'";
if (mysqli_query($connect, $sql)) {
    echo "레코드 삭제 성공!";
} else {
        echo "레코드 삭제 실패! : ".mysqli_error($connect);
}
mysqli_close($connect);
?>
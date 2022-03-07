<?php
$uid = 'lucas';
$pwd = '52';

$host = 'localhost:3306';
$user = 'root';
$pw = '52273178';
$dbName = 'study_db';
$conn = new mysqli($host, $user, $pw, $dbName);
$sql = "SELECT * FROM user WHERE uid='lucas' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    echo $row['uid'].$row['pwd'];
    if($row['pwd']==$pwd){
        echo "로그인 성공";
    }

    $sql = "SELECT * FROM user WHERE uid='yona' ";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['uid']." ".$row['pwd']."<br>";
    }
}
?>
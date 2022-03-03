<?php
$uid = $_POST['input_uid'];
$pwd = $_POST['input_pwd'];
$host = 'localhost:3306';
$user = 'root';
$pw = '52273178';
$dbName = 'study_db';
$conn = new mysqli($host, $user, $pw, $dbName);

$sql = "SELECT * FROM user WHERE uid='lucas' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    if($row['pwd']==$pwd){
        echo "로그인 성공";
    }else{
        echo "로그인 실패";
    }
}
?>


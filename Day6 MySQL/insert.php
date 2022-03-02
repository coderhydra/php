<?php
// mysql 연결
$host = "localhost";
$user = "root";
$pw = "52273178";
$dbName = "study_db";
$conn = new mysqli($host, $user, $pw, $dbName);

/* DB 연결 확인 */
if($conn){ echo "Connection established"."<br>"; }
else{ die( 'Could not connect: ' . mysqli_error($conn) ); }

/* INSERT 예제 */
$sql = "INSERT INTO user(uid, pwd) VALUES('shine','30')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<?php
$conn = mysqli_connect( 'localhost', 'root', 'PASSWORD', 'DB이름');
$sql = "INSERT INTO user(uid, pwd) VALUES('neo','1')";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
} else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
}
?>

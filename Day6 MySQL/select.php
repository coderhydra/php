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
echo "</br>";

/* SELECT 예제 1 */
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    echo $row['uid']." ".$row['pwd']."<br>";
}

/* SELECT 예제 2*/
$sql = "SELECT * FROM user WHERE uid='yona' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    echo $row['uid']." ".$row['pwd']."<br>";
}

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
foreach($row as $key => $r){
    echo "{$key} : {$r}   |   ";
}
mysqli_close($conn);
// SELECT 예제 3
try
{
    $connect = new PDO("mysql:host=$host;dbname=$dbName", $user, $pw);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user WHERE uid='yona'";
    foreach ($connect->query($sql) as $field) {
        echo $field['uid']."의 비밀번호 : ";
        echo $field['pwd']."<br>";
    }
}
catch(PDOException $ex){
    echo "레코드 선택 실패! : ".$ex->getMessage()."<br>";
}
$connect = null;
?>
<?php
mysqli_close($conn);
?>

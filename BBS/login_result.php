<?php
$uid = $_POST['input_uid'];
$pwd = $_POST['input_pwd'];
$host = 'localhost:3306';
$user = 'root';
$pw = '52273178';
$dbName = 'study_db';
$conn = new mysqli($host, $user, $pw, $dbName);

$sql = "SELECT * FROM user WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    if($row['pwd']==$pwd){
        // 발급된 세션 id가 있다면 세션의 id를, 없다면 false 반환
        if(!session_id()) {
        // id가 없을 경우 세션 시작
            session_start();
        }
        $_SESSION["uid"]=$uid; ?>
        <script>
            alert("<?php echo "alert: 로그인 성공 session id:".$_SESSION["uid"] ?>");
            location.replace("<?php echo './list.php' ?>");
        </script>
<?php
    } else { ?>
        <script>
            alert("로그인 실패");
        </script>
        <?php
    }
}
    $conn->close();


    ?>
<?php
$id=$_POST['id'];
$title=$_POST['title'];
$writer=$_POST['writer'];
$content=$_POST['content'];
// mysql 연결
$host = "localhost";
$user = "root";
$pw = "52273178";
$dbName = "study_db";
$conn = new mysqli($host, $user, $pw, $dbName);
$sql = "UPDATE BBS SET title='$title', content='$content', publish=NOW() WHERE id = '$id'";
if ($conn->query($sql) === TRUE) { ?>
    <script>
        alert("<?php echo "alert: 게시글이 수정되었습니다.";
            ?>");
        location.replace("<?php echo './list.php' ?>");
    </script>
    <?php
} else { ?>
    <script>
        alert("<?php echo "Error: " . $sql . "<br>" . $conn->error; ?>")
    </script>
    <?php
}
$conn->close();
?>
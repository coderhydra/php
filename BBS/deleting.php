<script>
<?php
$id=$_GET['id'];
$host = "localhost";
$user = "root";
$pw = "52273178";
$dbName = "study_db";
$conn = new mysqli($host, $user, $pw, $dbName);
$sql = "DELETE FROM BBS WHERE id = '$id'";
if ($conn->query($sql) === TRUE) { ?>
    alert("<?php echo "alert: 게시글이 삭제되었습니다." ?>");
    location.replace("<?php echo './list.php' ?>");
<?php
} else { ?>
    alert("<?php echo "Error: " . $sql . "<br>" . $conn->error; ?>")
<?php
}
$conn->close();
?>
</script>
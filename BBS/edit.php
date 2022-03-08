<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>BBS demo</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    // mysql 연결
    $host = 'localhost:3306';
    $user = 'root';
    $pw = '52273178';
    $dbName = 'study_db';
    $conn = new mysqli($host, $user, $pw, $dbName);
    $sql = "SELECT * FROM BBS WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
    <form method="post" action="editing.php">
        <h1>editing</h1>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        <h3>title<input type="text" name="title" value="<?php echo $row['title'] ?>"></h3>
        <h3>writer<input type="text" name="writer" value="<?php echo $row['writer'] ?>"></h3>
        <h3>content</h3><br>
        <textarea rows="7" cols="33" name="content"><?php echo $row['content'] ?></textarea></br>
        <button type="submit">submit</button>
        <button type="reset">reset</button>
    </form>
        <button onclick=location.href="./deleting.php?id=<?php echo $id ?>">delete</button>
        <?php
    }
    $conn->close();
    ?>
</body>
</html>

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
    //view_cnt
    $view_cnt_sql = "UPDATE BBS set view_cnt = view_cnt + 1 WHERE id = $id";
    $conn->query($view_cnt_sql);
    $sql = "SELECT * FROM BBS WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){

    ?>
    <button onclick=location.href="./list.php">list</button>
    <button onclick=location.href="./edit.php?id=<?php echo $id ?>">edit</button>
    <div>
       <div>
        <span><?php  echo $row['id']; ?></span>
            <span>제목</span><span><?php  echo $row['title']; ?></span>
       <span>조회수</span><span><?php  echo $row['view_cnt']; ?></span>
       </div>
        <div>
           <span>작성자</span><span><?php  echo $row['writer']; ?></span>
           <span>작성일</span><span><?php  echo $row['publish']; ?></span>
        </div>
       <div>내용</div><div><?php  echo $row['content']; ?></div>

    </div>

    <?php
        }
        $conn->close();
    ?>
</body>
</html>

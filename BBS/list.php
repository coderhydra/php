<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BBS demo</title>
    <style>
        table{margin: 0px; border-collapse: collapse; width: 70%;}
        th{border: solid 1px; }
        tr,td{text-align:center; border: solid 1px; padding: 10px }
        .title{width: 50%;}
    </style>
</head>
<body>
    <h1>BBS</h1>
    <table id="table">
        <thead class="head">
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>작성일</th>
                <th>조회수</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // mysql 연결
                $host = 'localhost:3306';
                $user = 'root';
                $pw = '52273178';
                $dbName = 'study_db';
                $conn = new mysqli($host, $user, $pw, $dbName);
                $sql = "SELECT * FROM BBS ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td class="title">
                        <a href="./list_detail.php?id=<?php echo $row["id"]?>"><?php echo $row["title"] ?></a>
                    </td>
                    <td><?php echo $row["writer"] ?></td>
                    <td><?php echo $row["publish"] ?></td>
                    <td><?php echo $row["view_cnt"] ?></td>
                </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <button onclick=location.href="./writing.php">writing</button><br>
</body>
</html>
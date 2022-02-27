<?php
$uploadfile = $_FILES['upload']['name'];
$fPath="./uploads";
if(move_uploaded_file($_FILES['upload']['tmp_name'],"$fPath/$uploadfile")){
    echo "title : {$_POST['title']}<br>";
    echo "content : {$_POST['content']}<br>";
    echo "<img src =$fPath/{$_FILES['upload']['name']}> <p>";
    echo "1. file name : {$_FILES['upload']['name']}<br/>";
    echo "2. file type : {$_FILES['upload']['type']}<br/>";
    echo "3. file size : {$_FILES['upload']['size']} byte <br />";
    echo "4. temporary file size : {$_FILES['upload']['size']}<br />";
} else {
    echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
}
?>
<a href="down.php?file=<?php echo "{$_FILES['upload']['name']}"; ?>">다운받기</a>

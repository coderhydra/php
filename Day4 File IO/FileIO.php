<?php
$data = "";
// 파일 쓰기
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];
    try {
        // 파일이 있는 경우는 if의 안으로 들어가고 없는 경우는 fopen을 실행하지 않는다
        if (@$handle = fopen('data.txt', 'a')) {
            fwrite($handle, $data . "\r\n");
        }
    } catch (Exception $e) {
        print_r($e);
    } finally{
        // I/O 리소스는 반드시 close를 해야한다.
        @fclose($handle);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
<form method="POST">
    <input type="text" name="data" value="<?=$data?>">
    <input type="submit">
</form>
<?php
$fname = "data.txt";
echo file_get_contents($fname)."<br>";
$fp = fopen($fname, "r");
echo fread($fp, filesize($fname))."<br>";
$fp = fopen($fname, "r");
echo stream_get_contents($fp, filesize($fname));  // mmap 기반
echo "<br>";
$fp = fopen($fname, "r");
    while(!feof($fp)){
        echo fgets($fp)."<br/>";
    }
fclose($fp);
?>
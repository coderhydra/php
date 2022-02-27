<?php
$pwd = "PW를 입력하세요";
$pwd = $_POST['input_pwd'];
if ($_POST['input_uid'] == null) $uid = "ID를 입력하세요"; else $uid = $_POST['input_uid'];
?>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>sample page</title>
</head>
<body>
    <h1>Hello PHP!</h1>
    <div>ID:<?php echo $uid; ?></div>
    <div>PW:<?php echo $pwd; ?></div>
</body>
</html>


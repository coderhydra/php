<?php
$uid = $_POST['input_uid'];
$pwd = $_POST['input_pwd'];
$name = $_POST['input_pwd'];
$phone = $_POST['input_pwd'];
$email = $_POST['input_pwd'];

class User{
    public $uid,$pwd,$name,$email,$phone;
    function __construct($uid,$pwd,$name,$email,$phone){
        $this->uid=$uid;
        $this->pwd=$pwd;
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
    }
}
$user=new User($uid,$pwd,$name,$email,$phone);

?>
    <html lang="ko">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>sample page</title>
    </head>
    <body>
    <h1>Hello PHP!</h1>
    <div>ID:<?php echo $user->uid; ?></div>
    <div>PW:<?php echo $pwd; ?></div>
    </body>
    </html>

<?php

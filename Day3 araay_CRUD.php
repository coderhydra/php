<h1>
    <?php
        class User {
            public $uid, $pwd, $name, $email, $phone;

            public function __construct($uid, $pwd, $name, $email, $phone){
                $this->uid = $uid;
                $this->pwd = $pwd;
                $this->name = $name;
                $this->email = $email;
                $this->phone = $phone;
            }
            public function __toString() {
                return "{$this->uid} | {$this->pwd} | {$this->name} | {$this->email} | {$this->phone}";
            }
         }


    // CRUD
    // C
    global $arr;
    $arr = array();
    $lucas = new User("lucas",52,"SungMin","lucas@gmail.com","213.909.1687");
    $yona = new User("yona",21,"HeeWon","yona_@gmail.com","213.909.1687");
    $huhu = new User("huhu",38,"YungHu","huhu@gmail.com","555.555.5555");
    $shine = new User("shine",30,"SeungHyun","shine@gmail.com","333.333.3333");
    $arr[0] = $lucas;
    array_push($arr,$yona);
    array_push($arr,$huhu);
    array_push($arr,$shine);
    // R
    function read($arr){
        echo "Read"."<br>";
        foreach ($arr as $item){
            echo $item."<br>";
        }
    }

        read($arr);

    // U
    $newLucas = new User("lucas",5227,"SungMin","lucas@gmail.com","213-909-1687");
    for ($i=0;$i<sizeof($arr);$i++){
        if ($arr[$i]->uid==$newLucas->uid)
            $arr[0]=$newLucas;
    }
    echo "Update Sucess"."<br>";
    read($arr);

    // D
    unset($arr[2]);
    unset($arr[3]);
    echo "Delete Sucess"."<br>";
    read($arr);
    ?>
</h1>
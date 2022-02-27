<style>body{font-size: large}</style>
<title>php 기본문법</title>
<body>
<?php
//  배열
    // 1차원 배열
        // 배열 생성, 요소 추가
        $arr = array();
        $arr[0] = "A";
        $arr[1] = "B";
        $arr[2] = "C";
        var_dump($arr);
        // 다중 요소 추가
        $arr = array("A", "B", "C");
        var_dump($arr);
        // 배열의 홀(hole)
        $arr = array();
        $arr[10] = "hello";
        var_dump($arr);
        # var_dump($arr[0]);
        var_dump(isset($arr[0])); // isset() 인수로 전달받은 변수가 초기화되어 있는지 확인
        var_dump(isset($arr[10]));
        // 배열과 반복문
            // for
//            $arr = array();
//            $arr[2] = "A";  $arr[3] = "B";  $arr[4] = "C";
//            for ($i=0; $i<count($arr); $i++) { //count()는 전체 길이가 아닌 배열의 요소에 대한 수를 반환하 3번의 반복문 수행으로 0, 1, 2번 인덱스에 대해서만 접근
//                echo $arr[$i]."<br/>";
//            }
            // foreach
            $arr = array();
            $arr[2] = "A";  $arr[3] = "B";   $arr[4] = "C";
            foreach ($arr as $element) {
                echo $element."<br/>";
            }
        // 조작
        // 배열 초기화
        $arr = array("A", "B", "C");
        for ($i = 0; $i < count($arr); $i++) echo $arr[$i];
        echo "<br />"; // 배열의 맨 끝에 요소 추가
        array_push($arr, "D");
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br />";
        // 배열의 맨 끝에 복수 요소 추가 (배열 결합 느낌)
        $arr = array_merge($arr, ["E", "F"]);
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br/>";
        // 배열의 맨 앞에 요소 추가
        array_unshift($arr, "G");
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br />";
        // 배열의 특정 위치에 요소 추가.
        // 여기서는 2번 인덱스에 요소를 추가하며, 기존의 요소들을 한 칸씩 밀어냄
        array_splice($arr, 2, 0, "H");
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br />";
        // 만약 기존의 2번 요소부터 길이 4까지를 제거하고 난 후,
        // 2번 인덱스에 추가하고 싶다면 다음과 같이 쓰면 됨
        array_splice($arr, 2, 4, "I");
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br/>";
        // 배열의 맨 앞 요소 제거
        array_shift($arr);
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br/>";
        // 배열의 맨 뒤 요소 제거
        array_pop($arr);
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br/>";
        // 정렬
        sort($arr);
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br />";
        // 역순 정렬
        rsort($arr);
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
        echo "<br />";

    // 다차뤙 배역
        // 2차원 베열
        /*
        $배열이름 = array(
            array(),
            array(),
            ....
        );
         */
        // 2차원 배열 요소 입력
        // 1차원 배열을 3개 갖는 2차원 배열 선언
        $arr = array( array(), array(), array() );
        // 배열의 요소 추가
        $arr[0][0] = "A";
        $arr[0][1] = "B";
        $arr[0][2] = 100;
        $arr[1][0] = "C";
        $arr[1][1] = 200;
        $arr[1][2] = "E";
        $arr[2][0] = false;
        $arr[2][1] = 0.03;
        $arr[2][2] = true;
        var_dump($arr);
        echo $arr[0][0]." ".$arr[0][1]." ".$arr[0][2]."<br/>";
        echo $arr[1][0]." ".$arr[1][1]." ".$arr[1][2]."<br/>";
        echo $arr[2][0]." ".$arr[2][1]." ".$arr[2][2]."<br/>";
        /*
        $배열이름 = array(
            array(배열요소00, 배열요소01, ...),
            array(배열요소10, 배열요소11, ...),
            ...
        );
        */
        // 2차원 배열과 반복문
        // 1차원 배열을 3개 갖는 2차원 배열 선언
        $arr = array( array(1, 2, 3), array(4, 5, 6), array(7, 8, 9) );
        for($row = 0; $row < count($arr); $row++){
            for($column = 0; $column < count($arr[$row]); $column++){
                echo $arr[$row][$column]." ";
            }
        }

    // 연관 배열
    /*
     * $배열이름 = array();
     */
        // 연관 배열의 참조
        /*
         * $배열이름["키"] = 값;
         * $배열이름 = array("키1" => 값1, "키2" => 값2, ...);
         */
        $array = array("A" => 100, "B" => 20);
        $arr["C"] = 2000;
        var_dump($array);
        // 루프를 이용한 연관 배열로의 접근
        $arr = array("A" => 100, "B" => 20, "C" => 30);
        echo "foreach 사용<br />";
        foreach ($arr as $key => $value) {
            echo $key."=>".$value."<br />";
        }


?>
</body>

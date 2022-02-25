<style>body{font-size: large}</style>
<title>php 기본문법</title>
<body>
<?php
// 주석
    // 한 줄 C언어 스타일
    /*
    여러 줄 C언어 스타일
    */
    # 한 줄 쉘 스타일      : #주석문

// 숫자&문자
    // 숫자
        echo 1;
        echo "<br>";
    // 연산자
        echo 2+2;
        echo 2-2;
        echo 2*2;
        echo 2/2;
        echo "<br>";
    // 형식확인
        var_dump(6);    # int
        var_dump(3.14); # float
        echo "<br>";
    // 문자
        echo "Hello World";
        echo "<br>";
    // int -> str
        echo var_dump(1234);    # int
        echo var_dump("1234");  # sting
        echo "<br>";
    // 문자의 결합 .
        echo "hello" . " " . "world";
        echo "<br>";
    // \ escaping
        echo '그는 "안녕하세요" 라고 말했다.';
        echo "그는 \"안녕하세요\" 라고 말했다.";
        echo "<br>";

// 변수&상수
    // 변수
        $var = 10;
        $var = 3.14;
        $var = "php";
        echo $var;
        echo "<br>";
        echo "변수 \$var에 저장된 값은 $var 입니다. </br>";
        // echo "변수 \$var에 저장된 값은 $var입니다. </br>"; 변수이름구별불가 {}
        echo "변수 \$var에 저장된 값은 {$var}입니다.";
            /*
             *변수 이름 정의
             *변수의 이름은 영문 대소문자, 숫자, 언더스코어(_)로만 구성.
             *변수의 이름은 숫자와의 구분을 빠르게 하기 위해 숫자로는 시작할 수 없다
             *변수의 이름은 숫자와의 구분을 빠르게 하기 위해 숫자로는 시작할 수 없다
             *변수의 이름에는 공백이 포함될 수 없다
             *변수의 이름으로 PHP에서 미리 정의한 $this는 사용할 수 없다
             *변수의 이름은 대소문자를 구분
             */
            /*
             * 기본 타입
             * boolean
             * integer
             * float : INF (무한)
             * string
             * array
             * object
             * resource : PHP 외부에 존재하는 외부 자원.데이터베이스 함수 등에서 데이터베이스 연결 등을 반환할 때 사용.
             * NULL
             */
            /*
             * 초기화
             * boolean : FALSE
             * integer : 0
             * float : 0.0
             * string : ""
             * array : []
             */
            //변수 타입 검사 및 변경
            $var=10;
            echo gettype($var);
            settype($var,'double');
            echo'<br/>'; // 줄바꿈
            echo gettype($var);
            echo'<br>';
            //가변함수
            $var='subject';
            $$var = 'PHP tutorial';
            echo $var;
            echo '<br />'; // 줄바꿈
            echo $subject;
            echo'<br>';
        //상수
            // define() 상수는 define() 함수를 사용하여 선언
            define("TITLE", "PHP Tutorial");
            echo TITLE;
            //define("TITLE", "JAVA Tutorial"); 상수 변경불가
            //echo TITLE;
            /*
             * 마법상수
             * __LINE__ 파일의 현재 줄 번호를 반환함.
             * __FILE__ 파일의 전체 경로와 이름을 반환함.include 내부에서 사용할 경우 include된 파일명을 반환함.
             * __DIR__ 파일의 디렉터리를 반환함.포함한 파일 안에서 사용할 경우 포함된 파일의 디렉터리를 반환함.include 내부에서 사용할 경우 include된 파일명을 반환함.
             * __DIR__ 파일의 디렉터리를 반환함.포함한 파일 안에서 사용할 경우 포함된 파일의 디렉터리를 반환함.dirname(__FILE__)과 같은 결과를 반환함.
             * __FUNCTION__ 함수의 이름을 반환함.
             * __CLASS__ 클래스의 이름을 반환함.클래스 이름은 대소문자를 구분함.
             * __TRAIT__ 트레이트(trait)의 이름을 반환함.트레이트의 이름은 트레이트를 선언한 네임스페이스를 포함함.트레이트는 여러 개의 클래스를 상속받을 수 있는 형태 (정확히는 가져와서 사용하는 형태)
             * __METHOD__ 클래스의 메소드 이름을 반환함.
             * __NAMESPACE__ 현재 네임스페이스의 이름을 반환함.
             */

?>
</body>
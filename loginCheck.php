<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-25
 * Time: 오후 8:14
 */
//넘어온값 디비 비교하고
// 그다음?ㅇㅅㅇ 만약에 있다! 하면 세션스타트와 동시에 세션변수를 넣어준다.$_SESSION['login'] = true false

$userId = $_POST['userid'];
$userPassword = $_POST['userpassword'];

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'autoset';
const DB_NAME = 'yeon';
const TB_NAME = 'user_info';

$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "select * from ".TB_NAME." where user_id = '$userId'";
$result = mysqli_query($db_con,$query);

if($array = mysqli_fetch_array($result)){

    if($array[3] == $userPassword){

        @session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $array[2];
        $_SESSION['userid'] = $array[1];
        echo "<script>alert('로그인 성공')</script>";
        echo "<script>location.href = 'main.php'</script>";
    }
    else{
        echo "<script>alert('비밀번호가 틀렸습니다')</script>";
        echo "<script>location.href = 'main.php'</script>";
    }

}
else{
    echo "<script>alert('아이디가 틀려써')</script>";
    echo "<script>location.href = 'main.php'</script>";
}


?>
<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-22
 * Time: 오후 8:29
 */

$title      = $_POST['title'];
$contents   = $_POST['contents'];
$time       = date("Y-m-d.H:i:s");

@session_start();
$userId = $_SESSION['userid'];
$userName = $_SESSION['username'];

//DB연결
define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,  DB_NAME);

//쿼리 작성, 전송
$query = "insert into ".TB_NAME." values(0, 0, '$userId', '$userName', '$title', '$contents', 0, '$time')";
mysqli_query($db_con,$query);
echo "<script>alert('글작성이 완료 되었습니다')</script>";
echo "<script>location.href='main.php'</script>";




?>

<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-25
 * Time: 오후 9:38
 */
$userId = $_SESSION['userid'];
$userName = $_SESSION['username'];

$num = $_POST['num'];
$contents = $_POST['contents'];
$time     = date("Y-m-d.H:i:s");

define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);

$query = "insert into ".TB_NAME." values(0,$num,'$userId','$userName','댓글','$contents',0,'$time')";
mysqli_query($db_con,$query);

echo "<script>alert('댓글작성 완료')</script>";
echo "<script>location.href='main.php'</script>"

?>
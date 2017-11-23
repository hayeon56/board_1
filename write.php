<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-22
 * Time: 오후 8:29
 */

$title      = $_POST['title'];
$contents   = $_POST['contents'];

echo $title;
echo $contents;
$time       = date("Y-m-d.H:i:s");
//DB연결
define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,  DB_NAME);

//쿼리 작성, 전송
$query = "insert into ".TB_NAME." values(0, 0, 'soraru', 'mahumahu', '$title', '$contents', 0, '$time')";
mysqli_query($db_con,$query);

echo "<a href = 'main.php' ><input type = 'button' value = '메인으로' ></a >";



?>
<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-24
 * Time: 오후 9:57
 */

//디비연결
//num값으로 그 쿼리 값 보여주기
//수정한뒤 쿼리에 update문으로 다시 넣기
$num = $_POST['num'];

define("HOST","localhost");
define("USER","root");
define("PASSWORD","autoset");
define("DB_NAME","yeon");
define("TB_NAME","suda_board");
$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "select * from ".TB_NAME." where board_id = $num";
$result = mysqli_query($db_con,$query);
$array = mysqli_fetch_array($result);


echo "<form action='modifiy2.php' method='post'>";
echo "<textarea style='width: 500px' name='title'>$array[4]</textarea>";
echo "<textarea style='width: 500px' name='contents'>$array[5]</textarea>";
echo "<input type='hidden' name='num' value='$num'>";
echo "<a href='modifiy2.php'><input type='submit' value='수정완료'></a>";
echo "</form>";



?>
<?php
/**
 * Created by PhpStorm.
 * User: LEEHAYEON
 * Date: 2017-11-25
 * Time: 오후 5:16
 */

$such = $_POST['such'];

const HOST = "localhost";
const USER = "root";
const PASSWORD = "autoset";
const DB_NAME = "yeon";
const TB_NAME = "suda_board";

$db_con = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
$query = "select * from ".TB_NAME." where subject like '%$such%' or contents Like '%$such%' ORDER BY reg_date";
$result = mysqli_query($db_con,$query);


echo "<table border='1' style='text-align: center'>";
while($array = mysqli_fetch_row($result)){

    echo "<tr>";
    echo "<td style='width: 150px'>$array[0]</td>";
    echo "<td style='width: 500px'><a href='view.php?num=$array[0]'>$array[4]</td>";
    echo "<td style='width: 150px'>$array[3]</td>";
    echo "<td style='width: 150px'>$array[6]</td>";
    echo "<td style='width: 200px'>$array[7]</td>";
    echo "</tr>";

};
echo "</table>";






?>
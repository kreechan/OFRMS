<?php

   include_once('db.php');

   $sql= "SELECT * FROM hall";
   $res = mysql_query($sql);
   $result = array();

   while( $row = mysql_fetch_array($res))
   {
   		array_push($result, array( 'hall_id' => $row[0],
   			                       'hall_name' => $row[1]),
   			                       'hall_description' => $row[2],
   			                       'hall_price' => $row[3]);
   }

   echo json_encode(array("output" => $result));
?>
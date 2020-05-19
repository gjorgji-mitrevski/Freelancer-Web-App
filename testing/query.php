<?php 


$url = $_SERVER['QUERY_STRING'];


 
 parse_str($url, $arr);
 if($arr==null)
 {
     echo "niza == 90";
 }
 
 $id = $arr["id"];


 if($id=="")
 {echo "nula".$id;}
 else
 {echo "ne e nula";}



?>
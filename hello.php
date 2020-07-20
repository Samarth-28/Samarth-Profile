<?php
$name = $_REQUEST [' Username '];
$Email = $_REQUEST [' Email '];
$Password = $_REQUEST [' Password '];
$age = $_REQUEST [' age '];
$Security answer = $_REQUEST [' Security answer '];
if(empty($name)||empty($Email)||empty($Password)||empty($age)||empty($Security answer))
{
	echo "Please fill all the fields";
}
else 
{
   mail("samarth2804singh@gmail.com", "samarth2804singh", $message , "From : $name < $Email>");


}
?>
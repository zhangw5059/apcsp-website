<!DOCTYPE html>
<html>
<head>
<title>PHP Distance measurement</title>
</head>
<body>
<h1>Distance measuring</h1>
<?php echo "Times: " . $_POST["rep"]; ?><br>
<?php
$myfile = fopen("/var/www/html/student4/output.txt", "r");
echo fread($myfile,filesize("/var/www/html/student4/output.txt"));
fclose($myfile);
?>
<?php
  system("/usr/lib/cgi-bin/student4/led");
?>
</body>
</html>

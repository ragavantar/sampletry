<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="3">
</head>
<body>

<?php

$myfile = fopen("web.txt", "a+") or die("Unable to open file!");
echo fgets($myfile);
$prev = fgets($myfile);
$name = $_POST["name"];
if($name=="")
{}else
{
$new = $name." : ".$_POST["msg"]."<br>";
 fwrite($myfile,$new);
}
fclose($myfile);
?>

<script>
window.scrollTo(0,document.body.scrollHeight);
</script>
</body>
</html>
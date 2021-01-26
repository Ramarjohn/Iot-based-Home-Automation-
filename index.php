<!DOCTYPE html>
<html>
<head>
  <title>Home Automation</title>
</head>
<body style=background-color:pink> </body>
<style> h1 {text-align: center}</style>
<style> b {text-align: center}</style>
<style> p {text-align: center}</style>
<head><style>div.relative{position:relative; left:200px; height:20px; width:350px; border:2px solid #03AD21;}</style></head>
<body>
<div class=relative>  <b> NATIONAL ENGINEERING COLLEGE </b> </div>
<div class=relative>   Ramar </div>
<div class = relative> Rajaguru </div>
<div class =relative> Venkatesh </div>
<form align="center" action ="" method="POST"><br><br><h1>Home Automation </h1><caption align="bottom"><b>guide:Dr.cameralsobia.phd,</b></caption><br><br><div><a><b>CLIENT 1:</b></a></div>
  <input type="submit" name="on" value="on" background-color=#555555><!--on=on-->
  <input type="submit" name="off" value="off"><!--off=off--><div><a><b>CLIENT 2:</b></a></div><input type="submit" name="to" value="to"><!--on=on-->
  <input type="submit" name="tf" value="tf"><!--off=off-->
</form>
<?php
error_reporting(0);
$textfile="text.txt";
$on=$_POST['on'];
$off=$_POST['off'];
$to=$_POST['to'];
$tf=$_POST['tf'];
$fileLocation="$textfile";
$fh=fopen($fileLocation,'w')or die("Something went wrong!");
if($on)
{
   $stringToWrite="$on";
   fwrite($fh,$stringToWrite);
   fclose($fh);
  echo $on;
}
else if($off)
{
   $stringToWrite="$off";
   fwrite($fh,$stringToWrite);
   fclose($fh);
  echo $off;
}
else if($to)
{
   $stringToWrite="$to";
   fwrite($fh,$stringToWrite);
   fclose($fh);
  echo $to;
}
else if($tf)
{
   $stringToWrite="$tf";
   fwrite($fh,$stringToWrite);
   fclose($fh);
  echo $tf;
}
?>
</body>
</html>

  
<?php
echo"<pre>";
print-r($_POST);
echo '</pre>';

if(isset($_POST['email']) && $_POST['email']!=''){


$userName=$POST ['name'];
$userEmail=$POST ['email'];
$userPhone=$POST ['phone'];
$userVisatype=$POST ['visa typpe'];
$messageSubject=$POST ['subject'];
$message=$_POST['message'];

$to="pooja_dh@hotmail.com";
$body="";

$body.="From:" .$userName. "\r\n";
$body.="Email:" .$userEmail. "\r\n";
$body.="Message:".$message. "\r\n";

mail ($to,$messageSubject,$body);
}
?>

<head>
  <meta charset="utf-8">
  <title> Wider World Immigration </title>
  <!--stylesheets -->

</head>
</body>
</html>

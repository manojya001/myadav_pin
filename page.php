<?php
function sendPage($body,$head='')
{
$html = <<< EOD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
$head
<title>Tool  for Updating Pincode With Constituency</title>
</head>
<body>
$body
</body>
</html>
EOD;
echo $html;
}
?>
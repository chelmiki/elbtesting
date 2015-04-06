<html>

<body>
<h1>test</h1>
<?php
echo $_SERVER['SERVER_ADDR']; 

$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' does not exist!";
  $cookie_name = "user";
  $cookie_value = substr( md5(rand()), 0, 7);
  setcookie($cookie_name,$cookie_value, time() + 180, "/");
echo "<p>Cookie is set</p>";
} else {
  echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
}
#sleep(6);
?>

</body>
</html>

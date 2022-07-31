<html>
<body>
<?php
$a = 100;
$a = "test";
$a = array(1,2,3);

$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
?>
</body>
</html>
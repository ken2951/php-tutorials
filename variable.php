
<html>
<body>
<?php
// comment
# comment

$a=1;
echo $a+1; #2
echo "<br />";
$a=2;
print $a+1; #3

$first = "coding";
echo $first." everybody";

$a = 100;
$a = $a + 10;
print $a.'<br />';
$a = $a / 10;
print $a.'<br />';
$a = $a - 10;
print $a.'<br />';
$a = $a * 10 ;    
print $a.'<br />';

#constant
define('TITLE', 'PHP Tutorial');
echo TITLE;
define('TITLE', 'JAVA Tutorial'); #error

#variable variables
$title = 'subject';
$$title = 'PHP tutorial';
echo $subject;

?>
</body>
</html>
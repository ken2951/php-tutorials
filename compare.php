<html>
<body>
<?php
  #1
  echo "1==2 : ";
  var_dump(1==2);           #false
  echo '<br />';
  echo "1==1 : ";
  var_dump(1==1);           #true
  echo '<br />';
  echo '"one"=="two" : ';
  var_dump("one"=="two");   #false
  echo '<br />';
  echo '"one"=="one" : ';
  var_dump("one"=="one");   #true
  echo '<br />';

  #2
  echo "1!=2 : ";
  var_dump(1!=2);           #true
  echo '<br />';
  echo "1!=1 : ";
  var_dump(1!==1);           #false
  echo '<br />';
  echo '"one"!="two" : ';
  var_dump("one"!="two");   #true
  echo '<br />';
  echo '"one"!="one" : ';
  var_dump("one"!="one");   #false
  echo '<br />';

  #3
  echo "10>20 : ";
  var_dump(10>20);           #false
  echo '<br />';
  echo "10>1 : ";
  var_dump(10>1);           #true
  echo '<br />';
  echo '10>10 : ';
  var_dump(10>10);          #false

  #4
  echo "10>=20 : ";
  var_dump(10>=20);           #false
  echo '<br />';
  echo "10>=1 : ";
  var_dump(10>=1);           #true
  echo '<br />';
  echo '10>=10 : ';
  var_dump(10>=10);           #true

  #5
  echo "1 == '1' : ";
  var_dump(1 == '1');
  echo "<br />1 === '1' : ";
  var_dump(1 === '1');
?>
</body>
</html>
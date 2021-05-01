<html>
<body>
<!--Your code goes here-->
<?php
  $result = $_GET['addFirst'] + $_GET['addSecond'];
  echo "<p>The sum of ${_GET['addFirst']} and ${_GET['addSecond']} is: ${result}</p>";
?>
<a href="index.php">Reset</a>
</body>
</html>

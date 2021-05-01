<html>
<body>
<!--Your code goes here-->
<h3>Addition</h3>
<form method="get" action="addition.php">
  <label for="addFirst">First Number: </label><input type="number" id="addFirst" name="addFirst">
  <label for="addSecond">Second Number: </label><input type="number" id="addSecond" name="addSecond">
  <button type="submit">Add</button><br>
</form>

<h3>Division</h3>
<form method="get" action="division.php">
  <label for="divNum">Numerator: </label><input type="number" id="divNum" name="divNum">
  <label for="divDen">Denominator: </label><input type="number" id="divDen" name="divDen">
  <button type="submit">Divide</button><br>
</form>
<a href="index.php">Reset</a>
</body>
</html>

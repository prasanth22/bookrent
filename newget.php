
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style></style>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<?php
include("array1.php")
?>
</head>     
<body>

<!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete="off" action="book.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="bookname" placeholder="Book Name">
  </div>
  <input type="submit">
</form>

<script src="js/javascript.js"></script>

</body>
</html>

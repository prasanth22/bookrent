<?php
session_start();
if(!isset($_SESSION['user']))
       header("location: index.php?Message=Login To Continue");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="prasanth">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Rent Books</title>
    <link href="css/my.css" rel="stylesheet">
</head>
<body>

 <h1>Book Renting System</h1>
 <?php include("navbar.php") ?>
  
  <div class="container">
  <form role="form" action="upload.php" method="POST" enctype="multipart/form-data">
		<label for="post_title">Book Name :</label><input type="text" name="book_name" class="form-control" >
		<br>

        <label for="post_author"> Author :</label><input type="text" name="author" class="form-control" >
		<br>
        
	    <label for="gener"> Gener :</label><select name = "gener">
                                             <option value="Literature and Fiction">Literature & Fiction</option>
                                             <option value="Biographies and Auto Biographies">Biographies & Auto Biographies</option>
                                             <option value="Business and Management">Business & Management</option>
                                             <option value="Academic and Professional">Academic & Professional</option>
											 <option value="Entrance Exam">Entrance Exam</option>
											 <option value="Children and Teens">Children & Teens</option>
                                           </select>
		<br>
		<br>
		<label for="description"> Description :</label>
		<input type="text" name="description" class="form-control" >
		<br>
		
        <label for="post_image">Add Cover Page Image</label>
		<input type="file" name="cover_page">
		<br>

        <label for="cost"> Cost:</label>
		<input type="text" name="cost" class="form-control" >
		<br>
        <br>		
        <button type="submit" name="upload" class="btn btn-primary" value="Upload Note">Upload</button>
        
  </form>
  
</div>
 
 <div class="container">
 <?php include("footer.php") ?>
 </div>

</body>
</html>	
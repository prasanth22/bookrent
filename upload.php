<?php include("dbconnect.php")?>
<?php
 if (isset($_POST['upload'])) {
	 $book_name = $_POST['book_name'];
	 $author = $_POST['author'];
	 $gener = $_POST['gener'];
	 $description = $_POST['description'];
	 $cost = $_POST['cost'];
	 $file = $_FILES['cover_page']['name'];
	 $target_dir = "uploads/";
	 $target_file = $target_dir . basename($_FILES["cover_page"]["name"]);
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Allow certain file formats
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
     echo "<script> alert('Sorry, only JPG, JPEG & PNG files are allowed.');</script>";
	 }
	 elseif (move_uploaded_file($_FILES["cover_page"]["tmp_name"], $target_file)) {
		 $query = "INSERT INTO books(book_id, book_name, author, gener,  description, cover_page, cost) VALUES ('','$book_name' , '$author' , '$gener' , '$description' , '$file', '$cost' )";
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('file uploaded successfully.');
                window.location.href='rent.php';</script>";
            }
            else {
                "<script> alert('Error while uploading..try again');</script>";
            }
        }
    }
 ?>
<?php 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($link, "DELETE FROM siswa WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script type='text/javascript'>window.location.href = 'index.php?page=siswa';</script>";
//header("Location:index.php?page=barang");
?>
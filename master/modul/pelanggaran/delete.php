<?php 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($link, "DELETE FROM pelanggaran WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script type='text/javascript'>window.location.href = 'index.php?page=pelanggaran';</script>";
//header("Location:index.php?page=customer");
?>
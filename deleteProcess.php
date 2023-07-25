<?php
include "connect.php";

$guestID = $_GET['Id'];

$query = "DELETE FROM guest WHERE guestID = '$guestID'";
$result = mysqli_query($conn,$query);

echo "<script>alert('Delete Successful !');</script>";
echo "<script>window.location.href ='indexAdmin.php'</script>";

?>
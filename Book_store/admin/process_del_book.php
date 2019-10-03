<?php
require('includes/config.php');

$sql = "DELETE FROM book WHERE b_id =".$_GET['b_nm'];

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
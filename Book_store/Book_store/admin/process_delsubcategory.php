<?php
require('includes/config.php');

		$sql = "DELETE FROM subcat WHERE subcat_nm =".$_GET['subcat_id'];

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
	
	
<?php
require "dbConnection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
    // Perform your delete operation using the $id
    
    // Example:
    $sql = "DELETE FROM blog WHERE id = $id";
    

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        // Redirect to the retrieve page
        header("Location: retrive_data.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No ID provided for deletion.";
}
?>

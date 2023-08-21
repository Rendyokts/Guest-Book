<?php
    // Check if the HTTP request method is POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the visitor ID from the POST data
        $visitorId = $_POST["id"];

        // Perform the database operation to delete the data
        $connection = mysqli_connect("localhost", "root", "", "dbbukutamu");
        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare and execute the delete query
        $deleteQuery = "DELETE FROM tbtamu WHERE id = $visitorId";
        if (mysqli_query($connection, $deleteQuery)) {
            echo "Data deleted successfully";
        } else {
            echo "Error deleting data: " . mysqli_error($connection);
        }

        // Close the database connection
        mysqli_close($connection);
    }
?>


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

        // this one under, is for phpMyAdmin with Xampp
        // $deleteQuery = "DELETE FROM tbtamu WHERE id = $visitorId"; 
        
        // Prepare the delete query with a placeholder fot the ID
        $deleteQuery = "DELETE FROM tbtamu WHERE id = ?";

        // create a prepared statement
        $stmt = mysqli_prepare($connection, $deleteQuery);

        if (!$stmt) {
            die("Error Preparing Statement : " . mysqli_error($connection));
        }

        // Bind the id parameter to the prepared statement
        mysqli_stmt_bind_param($stmt, "i", $visitorId);

        // execute the prepared statement
        if (mysqli_stmt_execute($stmt)){
            echo "Data deleted successfully";
        } else {
            echo "Error deleting data: " . mysqli_error($connection); 
        }

        //
        // if (mysqli_query($connection, $deleteQuery)) {
            //     echo "Data deleted successfully";
            // } else {
                //     echo "Error deleting data: " . mysqli_error($connection);
                // }
                
        // Close the database connection
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
?>


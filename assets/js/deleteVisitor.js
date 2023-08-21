function deleteVisitor(visitorId) {
    if (confirm("Are you sure you want to delete this visitor's data?")) {
         // Send an AJAX request to the PHP script to delete the data
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // If the deletion is successful, reload the page to reflect the updated data
                window.location.reload();
            }
        };
        xhr.send("id=" + visitorId);
    }
}

function editVisitor(visitorId) {
    // Implement the logic to edit visitor data here if needed.
    // You can redirect the user to an edit page or show a modal to edit the data.
    // This function is left empty since the original code only had the "Edit" button without any edit functionality.
}

function deleteVisitor(visitorId) {
    if (confirm("Are you sure you want to delete this visitor's data?")) {
         // Send an AJAX request to the PHP script to delete the data
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "dashboard.php", true);
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

<?php
// Include the database connection
include('db_connection.php');

// Fetch all government schemes from the database
$query = "SELECT * FROM government_schemes"; // Get all the schemes
$result = mysqli_query($conn, $query); // Execute the query

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    echo '<div class="container">';
    echo '<h1>Government Schemes for Farmers</h1>';
    echo '<p>Here is a list of all government schemes available to help you as a farmer:</p>';

    // Loop through each row (scheme) and display its details
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="scheme-item" style="background-color: #f9f9f9; margin: 20px 0; padding: 20px; border-radius: 5px;">';
        echo '<h3>' . $row['scheme_name'] . '</h3>';
        echo '<p><strong>Description:</strong> ' . $row['description'] . '</p>';
        echo '<p><strong>Eligibility:</strong> ' . $row['eligibility'] . '</p>';
        echo '<p><strong>Benefits:</strong> ' . $row['benefits'] . '</p>';
        echo '<p><strong>How to Apply:</strong> <a href="' . $row['application_link'] . '" target="_blank">Apply Now</a></p>';
        echo '</div>';
    }
    echo '</div>';
} else {
    echo '<p>No government schemes found at the moment.</p>';
}

// Close the database connection
mysqli_close($conn);
?>

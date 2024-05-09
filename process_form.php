

<?php
// Assuming your database connection is already established

// Get the form data
$name = $_POST['app_name'];
$email = $_POST['app_email'];
$phone = $_POST['app_phone'];
$free_time = $_POST['app_free_time'];
$services = $_POST['app_services'];
$barbers = $_POST['app_barbers'];

// Insert the form data into the database
$query = "INSERT INTO appointments (name, email, phone, free_time, services, barbers) VALUES ('$name', '$email', '$phone', '$free_time', '$services', '$barbers')";
$result = mysqli_query($connection, $query);

if($result){
    echo "Data saved successfully!";
} else {
    echo "Error saving data to database: " . mysqli_error($connection);
}
?>
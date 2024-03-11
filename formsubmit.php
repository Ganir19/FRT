<?php
// process_form.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Handle form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $symptoms = $_POST['symptoms'];
    $medical_history = $_POST['medical_history'];
    $current_medications = $_POST['current_medications'];
    $allergies = $_POST['allergies'];
    $blood_pressure = $_POST['blood_pressure'];
    $heart_rate = $_POST['heart_rate'];
    $respiratory_rate = $_POST['respiratory_rate'];
    $temperature = $_POST['temperature'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $diagnosis = $_POST['diagnosis'];
    $additional_notes = $_POST['additional_notes'];

    // Perform database operations (replace with your database connection details)
    $servername = "your_database_server";
    $username = "your_username";
    $password = "your_password";
    $dbname = "doctor_consulting";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO consultations (name, age, gender, symptoms, medical_history, current_medications, allergies, blood_pressure, heart_rate, respiratory_rate, temperature, weight, height, diagnosis, additional_notes)
            VALUES ('$name', $age, '$gender', '$symptoms', '$medical_history', '$current_medications', '$allergies', '$blood_pressure', '$heart_rate', '$respiratory_rate', '$temperature', '$weight', '$height', '$diagnosis', '$additional_notes')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

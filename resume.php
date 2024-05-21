<?php

// Variables for storing resume details
$name = "Your Name";
$email = "youremail@example.com";
$phone = "123-456-7890";
$address = "123 Street, City, Country";
$education = "Bachelor's Degree in Computer Science, University Name, Year";
$experience = "Software Engineer Intern, XYZ Company, Dates";

// Resume HTML template
$resume = "
<!DOCTYPE html>
<html>
<head>
    <title>Resume - $name</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
        }
        .section p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class='section'>
        <h2>Contact Information</h2>
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Phone: $phone</p>
        <p>Address: $address</p>
    </div>
    <div class='section'>
        <h2>Education</h2>
        <p>$education</p>
    </div>
    <div class='section'>
        <h2>Experience</h2>
        <p>$experience</p>
    </div>
</body>
</html>
";

// Output the resume
echo $resume;

?>

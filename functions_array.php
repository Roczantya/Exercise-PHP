<?php 
    include 'variable.php'; // Include the variable.php file
    include 'Control_flow.php'; // Include the Control_flow.php file
    
    // Create an array of Person objects
    $people = [];
    
    $people[] = new Person('Tiffany', '2005-04-01', 'female', 3.73, true);
    $people[] = new Person('Nina', '2007-05-15', 'female', 3.85, true);
    $people[] = new Person('Tania', '2009-06-10', 'female', 3.65, false);
    $people[] = new Person('Budi', '2003-07-20', 'male', 3.80, true);
    $people[] = new Person('Mike', '2002-08-25', 'male', 3.90, true);
    
    // Start the HTML document
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>People Information</title>
        <style>
            body { font-family: Arial, sans-serif; }
            .person { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
            h2 { color: #4CAF50; }
        </style>
    </head>
    <body>
        <h1>People Information</h1>";

    // Display information for each person
    foreach ($people as $person) {
        echo "<div class='person'>";
        $person->displayName();
        $person->displayAge();
        $person->displayGender();
        $person->displayGPA();
        $person->displayStudentStatus();
        displayAgeStatus($person);
        echo "</div>";
    }

    echo "</body>
    </html>";
?>

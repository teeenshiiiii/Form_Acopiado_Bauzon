<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission</title>
        <style>
            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-image: url("flower.jpg");
                margin: 0;
                padding: 0;
            }
            .container {
                width: 50%;
                margin: auto;
                padding: 20px;
                background-color: #ffcce5;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                margin-top: 50px;
            }
            h1 {
                text-align: center;
                color: #333;
            }
            p {
                font-size: 18px;
                line-height: 1.6;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Form Submitted Successfully</h1>
            <p><strong>First Name:</strong> <?php echo $first_name; ?></p>
            <p><strong>Last Name:</strong> <?php echo $last_name; ?></p>
            <p><strong>Age:</strong> <?php echo $age; ?></p>
            <p><strong>Contact:</strong> <?php echo $contact; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </div>
    </body>
    </html>
    
    <?php
} else {
    echo "Form not submitted properly.";
}
?>
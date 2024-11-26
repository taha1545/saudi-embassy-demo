<?php

header('Content-Type: text/html; charset=UTF-8');

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img.jpg">
    <title>SaudiVisa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 24px;
            color: #2d6a4f;
            margin-bottom: 15px;
        }
        p {
            font-size: 16px;
            color: #6c757d;
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2d6a4f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #1f4f3c;
        }
    </style>
</head>
<body>
    <section>
        <h1>Your form was sent successfully</h1>
        <p>Check your email for a response</p>
        <a href="/" class="btn">Go Back to Home</a>
    </section>
</body>
</html>
';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $formData = [
        'email'=>'senpaimato5@gmail.com',
        'full_name' => $_POST['full_name'],
        'mothers_name' => $_POST['mothers_name'],
        'date_of_birth' => $_POST['date_of_birth'],
        'place_of_birth' => $_POST['place_of_birth'],
        'passport_number' => $_POST['passport_number'],
        'place_of_issue' => $_POST['place_of_issue'],
        'date_of_issue' => $_POST['date_of_issue'],
        'date_of_expiry' => $_POST['date_of_expiry'],
        'present_nationality' => $_POST['present_nationality'],
        'travel_purpose' => $_POST['travel_purpose'],
        'sex' => $_POST['sex'],
        'marital_status' => $_POST['marital_status'],
        'religion' => $_POST['religion'],
        'qualification' => $_POST['qualification'],
        'profession' => $_POST['profession'],
        'duration_of_stay' => $_POST['duration_of_stay'],
        'date_of_arrival' => $_POST['date_of_arrival'],
        'date_of_departure' => $_POST['date_of_departure'],
        'mode_of_payment' => $_POST['mode_of_payment'],
        'carrier_name' => $_POST['carrier_name'],
        'business_address_phone' => $_POST['business_address_phone'],
        'dependent_name' => $_POST['dependent_name'],
        'relationship' => $_POST['relationship'],
        'dependent_date_of_birth' => $_POST['dependent_date_of_birth'],
        'dependent_sex' => $_POST['dependent_sex'],
        'previous_nationality' => $_POST['previous_nationality'],
        'home_address_phone' => $_POST['home_address_phone']
    ];

    
    $file = 'db.json';

    if (file_exists($file)) {
        $existingData = json_decode(file_get_contents($file), true);
    } else {
        $existingData = []; 
    }
    $existingData[] = $formData;

    file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

    
} else {
    echo "Error: Please return to the form.";
}
?>

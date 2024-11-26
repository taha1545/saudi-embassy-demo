<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['email'] == 'senpaimato5@gmail.com' && $_POST['password'] == 'taha2005') {
        $jsonFile = 'db.json'; 
        if (file_exists($jsonFile)) {
            $jsonData = file_get_contents($jsonFile);
            $data = json_decode($jsonData, true); 

            if ($data) {
                echo '<style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f9;
                            margin: 0;
                            padding: 0;
                            display: flex;
                            justify-content: center;
                           
                            height: 100vh;
                        }
                        section {
                            background-color: white;
                            border-radius: 8px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            padding: 30px;
                            width: 100%;
                            overflow-x: auto;
                        }
                        h1 {
                            font-size: 24px;
                            color: green;
                            margin-bottom: 20px;
                        }
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        table, th, td {
                            border: 1px solid #ddd;
                        }
                        th, td {
                            padding: 8px;
                            text-align: left;
                        }
                        th {
                            background-color: #f4f4f4;
                        }
                      </style>';
                
                echo '<section>';
                echo '<h1>Data Retrieved Successfully</h1>';
                echo '<table>';
                echo '<tr>';
                foreach (array_keys($data[0]) as $header) {
                    echo '<th>' . htmlspecialchars($header) . '</th>';
                }
                echo '</tr>';
                
                foreach ($data as $item) {
                    echo '<tr>';
                    foreach ($item as $value) {
                        echo '<td>' . htmlspecialchars($value) . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                echo '</section>';
            } else {
                echo 'Error decoding JSON data.';
            }
        } else {
            echo 'JSON file not found.';
        }
    } else {
        echo '
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }
        h1 {
            font-size: 24px;
            color: red;
            margin-bottom: 20px;
        }
         </style>
            <section>
             <h1>You can\'t access this page, sorry!</h1>
            </section>
        ';
    }
} else {
    echo '
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }
        h1 {
            font-size: 24px;
            color: red;
            margin-bottom: 20px;
        }
         </style>
            <section>
             <h1>You can\'t access this page, sorry!</h1>
            </section>
        ';
}
?>

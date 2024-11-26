<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="component/img.jpg">
    <title>SaudiVisa - Admin Login</title>
    <link rel="stylesheet" href="component/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qj6Upwr38r0I4ltfpbHFw9n52Rrjbi5DoSiTbAKyFSp9MylKq4jpQ28NcXGf43h7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            color: #2d6a4f;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #2d6a4f;
        }
        input[type="email"], input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #2d6a4f;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        button:hover {
            background-color: #22543d;
        }
        p {
            font-size: 14px;
            color: #6c757d;
            margin-top: 10px;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section>
        <form id="adminLoginForm" method="POST"  action="php/adminhome.php">
            <h1>Admin Login</h1>
            <div class="error-message" id="errorMessage"></div>
            <div>
                <label for="email">Email:</label>
                <input id="email" name="email" placeholder="Enter your email" type="email" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input id="password" name="password" placeholder="Enter your password" type="password" required />
            </div>
            <button type="submit">Login</button>
        </form>
    </section>

  
</body>
</html>

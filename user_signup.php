<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
        }
        p {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #009578;
            color: #fff;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Sign Up Page</h1>
    <form action="submit.php" method="post">
        <p>Name: <input type="text" name="name" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p><input type="submit" value="Sign Up"></p>
    </form>
</body>
</html>

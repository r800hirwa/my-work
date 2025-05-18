<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Worker</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>
    <h1>Create Worker</h1>

    <form method="POST" action="{{ route('worker.store') }}">
        @csrf
        <input type="text" name="firstname" placeholder="Enter your firstname" required><br>
        <input type="text" name="lastname" placeholder="Enter your lastname" required><br>
        <input type="text" name="location" placeholder="Enter your location" required><br>
        <input type="email" name="email" placeholder="Enter your email" required><br>
        <button type="submit">INSERT</button>
    </form>
</body>
</html>

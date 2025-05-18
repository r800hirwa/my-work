<!DOCTYPE html>
<html>
<head>
    <title>Edit Worker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            padding: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            margin-top: 20px;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Edit Worker</h1>

    <form action="{{ route('worker.update', $worker->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Firstname:</label>
        <input type="text" name="firstname" value="{{ $worker->firstname }}">

        <label>Lastname:</label>
        <input type="text" name="lastname" value="{{ $worker->lastname }}">

        <label>Location:</label>
        <input type="text" name="location" value="{{ $worker->location }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ $worker->email }}">

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('worker.index') }}">← Back to List</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>All Workers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table thead {
            background-color: #3498db;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tbody tr:hover {
            background-color: #eaf4fb;
        }

        a {
            text-decoration: none;
            color: #3498db;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }

        .success {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .add-link {
            display: inline-block;
            margin-top: 20px;
            background-color: #2ecc71;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .add-link:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <h1>All Workers</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Location</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
                <tr>
                    <td>{{ $worker->firstname }}</td>
                    <td>{{ $worker->lastname }}</td>
                    <td>{{ $worker->location }}</td>
                    <td>{{ $worker->email }}</td>
                    <td>
                        <a href="{{ route('worker.edit', $worker->id) }}">Edit</a>

                        <form action="{{ route('worker.destroy', $worker->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="add-link" href="{{ route('worker.create') }}">Add New Worker</a>
</body>
</html>

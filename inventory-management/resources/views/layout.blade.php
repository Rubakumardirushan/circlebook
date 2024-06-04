<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #f8f9fa;
        }
        header {
            border-bottom: 1px solid #dee2e6;
        }
        header h1 {
            margin: 0;
        }
        nav a {
            text-decoration: none;
            font-weight: bold;
        }
        main {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <header class="bg-secondary text-white p-3">
        <div class="container">
            <h1 class="h3">Inventory System</h1>
            <nav>
                <a href="{{ route('items.index') }}" class="text-white">Home</a>
            </nav>
        </div>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>WanderList PH</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f6f9;
        }

        header {
            background: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        button {
            padding: 8px 12px;
            border: none;
            background: #3498db;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<header>
    <h1>WanderList PH</h1>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>© 2026 WanderList PH</p>
</footer>

</body>
</html>

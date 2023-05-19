<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .dashboard-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard-item h2 {
            margin-top: 0;
        }

        .dashboard-item p {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>UJI KOMPETENSI LSP</h1>
        <div class="dashboard">
            <div class="dashboard-item">
                <h2>Perulangan tanpa input</h2>
                <a href="http://lsp1.test/noinput.php"> Klik disini -></a>
            </div>
            <div class="dashboard-item">
                <h2>Perulangan dengan input</h2>
                <a href="http://lsp1.test/input.php"> Klik disini -></a>
            </div>
            <div class="dashboard-item">
                <h2>Penjumlahan 2 bilangan</h2>
                <a href="http://lsp1.test/penjumlahan.php"> Klik disini -></a>
            </div>
        </div>
        <br />
        <hr>
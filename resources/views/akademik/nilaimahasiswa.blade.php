<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nilai Mahasiswa</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 90%;
            width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 25px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            text-align: left;
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        tr:hover {
            background-color: #f9f9f9;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }

        .alert-warning {
            color: #00ff37;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nilai Mahasiswa</h1>
        <div class="col-md-6">
            @if ($total_nilai>=0 and $total_nilai<=56)
                <div class="alert alert-danger">Maaf, Anda tidak lulus</div>
            @elseif ($total_nilai>=55 and $total_nilai<=100)
                <div class="alert alert-warning">Anda lulus, Selamat!</div>
            @else
                <div class="alert alert-danger">Nilai tidak valid</div>
            @endif
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Total Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{$nama}}</td>
                    <td>{{$nim}}</td>
                    <td>{{$total_nilai}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

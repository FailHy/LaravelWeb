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
            background: #eef2f7;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
        h4 {
            color: #555;
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
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        .alert {
            padding: 12px;
            margin-top: 10px;
            border-radius: 6px;
            text-align: center;
            display: inline-block;
            min-width: 100px;
            font-weight: bold;
        }
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nilai Mahasiswa</h1>
        <h4>Nama: {{$nama}}, NIM: {{$nim}}</h4>

        <div>
            <strong>Nilai:</strong>
            @foreach ($total_nilai as $nilai)
                @if ($nilai < 12)
                    @continue  {{-- Melewati nilai di bawah 12 --}}
                @endif
                <div class="alert alert-danger">{{ $nilai }}</div>
            @endforeach
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
                    <td>{{ array_sum($total_nilai) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

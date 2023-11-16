<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #EEF1FF;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Tugas Pengembangan Web - Laravel</h1>
    <p>Yudhi Winantoro</p>
    <p>21060120120009</p>
    <p>Teknik Elektro 2020</p>
    <h1>UKT Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tingkat UKT</th>
                <th>UKT Rupiah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uktData as $ukt)
                <tr>
                    <td>{{ $ukt->id }}</td>
                    <td>{{ $ukt->tingkat_ukt }}</td>
                    <td>{{ $ukt->ukt_rupiah }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Fakultas Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fakultas Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultasData as $fakultas)
                <tr>
                    <td>{{ $fakultas->id }}</td>
                    <td>{{ $fakultas->fakultas_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Mahasiswa Data</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>UKT ID</th>
                <th>Fakultas ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswaData as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->id }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->ukt_id }}</td>
                    <td>{{ $mahasiswa->fakultas_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

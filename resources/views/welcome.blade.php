<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @csrf
    <title>Website Pendaftaran</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #1e90ff, #00c6ff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            padding: 20px;
        }

        .card {
            max-width: 450px;
            margin: auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .card h1 {
            margin-bottom: 15px;
            color: #333;
        }

        .card p {
            margin-bottom: 30px;
            color: #555;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #1e90ff;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #0b5ed7;
        }

        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <h1>Pendaftaran PKL</h1>
            <p>
                Selamat datang di website pendaftaran.
                Silakan klik tombol di bawah ini untuk melakukan pendaftaran peserta.
            </p>

            <a href="/login" class="btn">Daftar Sekarang</a>

            <footer>
                © 2026 Sistem Pendaftaran
            </footer>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>ETCareer</title>
    <style>
        h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .company {    
            font-weight: 500;
        }
        .card {
            transition: all 0.2s ease;
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .badge {
            display: inline-block;    
            background: #22c55e;
            color: white;
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 12px;
            margin-top: 10px;
            font-weight: 500;
        }
        input:focus, select:focus {
            outline: none;
            border: 1px solid #3b82f6;
        }
        button {
            transition: 0.2s;
        }
        button:hover {
            transform: scale(1.02);
        }
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            background: #f4f6f8;
        }

        /* NAVBAR */
        .navbar {
            background: #1e293b;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        /* CONTAINER */
        .container {
            width: 85%;
            margin: 30px auto;
        }

        /* FORM */
        .form-box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .form-box h3 {
            margin-top: 0;
        }

        .form-box input {
            width: 100%;
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .form-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #3b82f6;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .form-box button:hover {
            background: #2563eb;
        }

        /* GRID */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        /* CARD */
        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin: 0 0 5px 0;
        }

        .company {
            color: #555;
        }

        .location {
            font-size: 13px;
            color: gray;
            margin-top: 5px;
        }

        .badge {
            display: inline-block;
            background: #22c55e;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            margin-top: 10px;
        }

    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>💼 ETCareer</h2>
    <div>Find Your Dream Job</div>
</div>

<div class="container">

    <!-- FORM -->
    <div class="form-box">
        <h3>Tambah Lowongan</h3>

        <form action="/jobs" method="POST">
            @csrf

            <input type="text" name="title" placeholder="Judul Pekerjaan" required>
            <input type="text" name="company" placeholder="Perusahaan" required>
            <input type="text" name="location" placeholder="Lokasi" required>
            <select name="category" required>
                <option value="Lowongan">Lowongan</option>
                <option value="Magang">Magang</option>
                <option value="Pelatihan">Pelatihan</option>
            </select>

            <button type="submit">Tambah Lowongan</button>
        </form>
    </div>

    <!-- LIST -->
    <div class="grid">
        @foreach($jobs as $job)
            <div class="card">
                <h3>{{ $job->title }}</h3>
                <div class="company">{{ $job->company }}</div>
                <div class="location">📍 {{ $job->location }}</div>
                <div class="badge"> {{ $job->category }}</div>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>
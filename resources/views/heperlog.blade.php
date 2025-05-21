<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helperfind Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            background-color: #1e3a8a;
            color: white;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        .sidebar h2 img {
            margin-right: 10px;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #1e40af;
        }
        .sidebar a.active {
            background-color: #1e40af;
        }
        .sidebar a i {
            font-size: 20px; /* Ukuran ikon */
            margin-right: 10px; /* Jarak antara ikon dan teks */
        }
        .sidebar .logout-btn {
            background-color: #dbdddf;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            cursor: pointer;
            align-self: center;
            margin-bottom: 20px;
            font-size: 18px;
            width: 80%;
        }
        .sidebar .logout-btn:hover {
            background-color: #bdc3c7;
        }
        .content {
            flex: 1;
            padding: 40px;
        }
        .filter-section {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        select, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #1e3a8a;
            color: white;
            cursor: pointer;
        }
        .no-results {
            text-align: center;
            margin-top: 50px;
        }
        .no-results img {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div>
            <h2><img src="img/User.png" alt="User" width="40" height="40"> User</h2>
            <p style="font-size: 14px; margin: 0; color: #bdc3c7;">user@example.com</p>
            <a href="#"><i class="fa-solid fa-list-check"></i> Helperlog</a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Helperfind</a>
            <a href="#"><i class="far fa-comment-alt"></i> Helperassist</a>
        </div>
        <div class="logout-btn">Log Out</div>
    </div>

    <div class="content">
        <h1>Helperfind Dashboard</h1>
        <p>Filter PRT berdasarkan:</p>
        <div class="filter-section">
            <select>
                <option>Kategori Pekerjaan</option>
                <option>Pegawai BUMN</option>
                <option>Polisi</option>
                <option>Pemadam Kebakaran</option>
            </select>
            <select>
                <option>Pilih Lokasi</option>
                <option>Surabaya</option>
                <option>Bekasi</option>
                <option>Jakarta</option>
            </select>
            <select>
                <option>Pilih Rating</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
            <select>
                <option>Pilih Umur</option>
                <option>20-25</option>
                <option>26-30</option>
                <option>31-35</option>
                <option>36-40</option>
                <option>41-45</option>
            </select>
            <button>Cari</button>
        </div>

        <div class="no-results">
            <img src="https://cdn-icons-png.flaticon.com/512/2748/2748558.png" alt="Not Found">
            <p>Maaf, kami tidak bisa menemukan PRT yang cocok <br> Coba pencarian lain!</p>
        </div>
    </div>

</body>
</html>

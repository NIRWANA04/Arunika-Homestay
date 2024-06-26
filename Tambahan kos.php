<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kos - Arunika Homestay</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('bckground_login.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .container {
            max-width: 550px;
            margin: 40px auto;
            padding: 25px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            margin-top: 0;
            font-weight: bold;
            color: #333;
            text-align: center;
            font-size: 28px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 20px;
            color: #666;
            text-align: center;
            font-size: 16px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 1200px;
        }

        label {
            font-size: 15px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 44%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: #543310;
            box-shadow: 0 0 5px rgba(84, 51, 16, 0.5);
            outline: none;
        }

        input[type="text"]::placeholder,
        input[type="number"]::placeholder,
        textarea::placeholder {
            color: #999;
        }

        textarea {
            resize: vertical;
        }

        .button {
            background-color: #543310;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 8px;
            text-align: center;
            display: inline-block;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 46%;
        }

        .button:hover {
            background-color: #AF8F6F;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .button:active {
            transform: scale(1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Tambah Kos</h1>
    <p>Silakan masukkan detail kos Anda</p>
    <form action="submit_kos.php" method="POST" enctype="multipart/form-data">
        <label for="pemilik_kos">Pemilik Kos:</label>
        <input type="text" id="pemilik_kos" name="pemilik_kos" placeholder="Nama pemilik kos..." required>

        <label for="nama_kos">Nama Kos:</label>
        <input type="text" id="nama_kos" name="nama_kos" placeholder="Nama kos..." required>
        
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="3" placeholder="Alamat lengkap kos..." required></textarea>
        
        <label for="harga">Harga per Bulan:</label>
        <input type="number" id="harga" name="harga" placeholder="Harga per bulan..." required>
        
        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" rows="3" placeholder="Deskripsi kos..." required></textarea>
        
        <label for="fasilitas">Fasilitas:</label>
        <textarea id="fasilitas" name="fasilitas" rows="3" placeholder="Fasilitas yang tersedia..." required></textarea>

        <label for="gambar_kos">Unggah Gambar Kos (maksimal 2MB):</label>
        <input type="file" id="gambar_kos" name="gambar_kos" accept="image/*" required>
        
        <button type="submit" class="button">Submit</button>
    </form>
</div>
</body>
</html>

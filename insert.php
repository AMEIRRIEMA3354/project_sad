<?php
include('config.php');
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $angka_giliran = $_POST['angka_giliran'];
    $komen = $_POST['komen'];
    $query = "INSERT INTO pengguna (nama,angka_giliran,komen) VALUES('$nama','$angka_giliran','$komen')";
    if(mysqli_query($connect,$query)){
        echo"<script>
             alert('Aduan Berjaya Dihantar');
             window.location.href = 'index.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKVS - Borang Aduan</title>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-image: url('roro.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: #333;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: white;
}

header .logo {
    font-size: 24px;
    font-weight: bold;
}

header nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;
}

.form-container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
}

.form-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 8px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #333;
}

.form-group button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form-group button:hover {
    background-color: #555;
}



</style>
<body>
    <header>
        <div class="logo">SAKVS</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Borang</a></li>
                <li><a href="#">Rekod</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h1>Borang Aduan Pelajar</h1>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="angka-giliran">Angka Giliran:</label>
                    <input type="text" id="angka-giliran" name="angka_giliran" placeholder="Masukkan Angka Giliran" required>
                </div>
                
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                </div>

                <div class="form-group">
                    <label for="aduan">Aduan:</label>
                    <textarea id="aduan" name="komen" rows="5" placeholder="Masukkan Aduan Anda" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit">Hantar Aduan</button>
                </div>
                <center><a style="color: blue;" href="index.php">Lihat Rekod Aduan</a></center>
            </form>
        </div>
    </main>

    <footer>
        <p></p>
    </footer>
</body>
</html>

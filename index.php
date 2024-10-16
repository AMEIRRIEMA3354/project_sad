<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKVS - Rekod Aduan</title>
    
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-image: url('topi.jpg'); /* Set your background image */
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

h1{
    color: black;
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
    padding: 50px 20px;
    text-align: center;
}

.record-section {
    margin-bottom: 147%;
     background-color: rgba(255, 255, 255, 0.9); 
    padding: 30px;
    border-radius: 10px;
}

.record-section h1 {
    font-size: 28px;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead th {
    /* border: 1px solid #000; */
    padding: 15px;
    font-size: 16px;
    background-color: #c1e1ec;
    border-radius: 30px;
}

tbody td {
    /* border: 1px solid #000; */
    padding: 15px;
    font-size: 14px;
}

tbody td:first-child {
    text-align: center;
}

footer {
    text-align: center;
    padding: 10px;
   
}

</style>
<body>
    <header>
        <div class="logo">SAKVS</div>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="insert.php">Borang</a></li>
                <li><a href="index.php">Rekod</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="record-section">
            <h1>Rekod Aduan Pelajar</h1>
            <table>
                <thead>
                    <tr>
                        <th>Angka Giliran</th>
                        <th>Nama</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
<!-- tambah row dekat sini -->
<?php
$papar= mysqli_query($connect,"SELECT * FROM pengguna");
while($row = mysqli_fetch_array($papar)){
    echo "<tr>";
    echo "<td>".$row['angka_giliran']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['komen']."</td>";
    echo "</tr>";
}
?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p></p>
    </footer>
</body>
</html>

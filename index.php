<?php
include 'koneksi.php';

// TAMBAH DATA
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama_project'];
    $desk = $_POST['deskripsi'];

    mysqli_query($conn, "INSERT INTO project (nama_project, deskripsi) 
                         VALUES ('$nama', '$desk')");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Portfolio Saya</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
</head>
<body>

<h1>Portfolio Saya</h1>

<!-- FORM TAMBAH PROJECT -->
<h2>Tambah Project</h2>
<form method="POST">
  <input type="text" name="nama_project" placeholder="Nama Project" required><br><br>
  <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br><br>
  <button type="submit" name="tambah">Tambah</button>
</form>

<hr>

<!-- TAMPILKAN DATA -->
<h2>Daftar Project</h2>

<?php
$result = mysqli_query($conn, "SELECT * FROM project ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='border:1px solid #000; padding:10px; margin:10px;'>";
    echo "<h3>" . $row['nama_project'] . "</h3>";
    echo "<p>" . $row['deskripsi'] . "</p>";
    echo "</div>";
}
?>

</body>
</html>
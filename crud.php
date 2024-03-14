<?php
include 'koneksi.php';

// Tambah siswa
if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO siswa (nama, umur) VALUES ('$nama', '$umur')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tampilkan siswa
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["umur"] . "</td><td><a href='crud.php?action=delete&id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Hapus</a></td></tr>";
    }
} else {
    echo "0 results";
}

// Hapus siswa
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];

    $sql = "DELETE FROM siswa WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

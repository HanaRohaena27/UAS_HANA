<?php
// Sertakan berkas config.php untuk mengkonfigurasi koneksi database
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $alamat = $_POST["alamat"];

    // Query SQL untuk menyimpan data ke database
    $sql = "INSERT INTO mahasiswa (nama, email, jurusan, alamat) VALUES (?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameter
        $stmt->bind_param("ssss", $nama, $email, $jurusan, $alamat);
        
        // Eksekusi pernyataan
        if ($stmt->execute()) {
            header("Location: list-mahasiswa.php");
            exit();
        } else {
            echo "Pendaftaran gagal: " . $stmt->error;
        }
        
        // Tutup pernyataan
        $stmt->close();
    } else {
        echo "Kesalahan dalam persiapan pernyataan: " . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>

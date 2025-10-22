<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'market';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}

// Jika data dikirim dari form (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password)) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil disimpan!<br><br>";
            echo"<p><a href='lihat.php'>lihat data</a></p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error . "<br><br>";
        }
    } else {
        echo "Semua field harus diisi!<br><br>";
    }
}

?>

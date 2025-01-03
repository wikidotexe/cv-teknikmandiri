<?php
// Autoload Composer
require __DIR__ . '/vendor/autoload.php';

// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Menghubungkan ke database
$conn = mysqli_connect(
    $_ENV['DB_HOST'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASSWORD'], 
    $_ENV['DB_NAME']
) or die('Connection failed: ' . mysqli_connect_error());

function getContactFormData() {
    global $conn;
    $sql = "SELECT * FROM contact_form"; // mengambil dari table contact_form database
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die('Query Error: ' . mysqli_error($conn));
    }
    return $result;
}

// Query untuk meminta akses dari database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO contact_form (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')";
    
    if (mysqli_query($conn, $sql)) {
        // Setelah data tersimpan, kirim email menggunakan PHPMailer
        require './PHPMailer/src/Exception.php';
        require './PHPMailer/src/PHPMailer.php';
        require './PHPMailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $_ENV['MAIL_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['MAIL_USERNAME'];
            $mail->Password = $_ENV['MAIL_PASSWORD'];
            $mail->Port = $_ENV['MAIL_PORT'];
            $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];

            // Atur pengirim email
            $mail->setFrom($email);
            // Atur penerima email
            $mail->addAddress('wikiarln07@gmail.com');

            // Isi email
            $mail->isHTML(true);
            $mail->Subject = 'Formulir Kontak';
            $mail->Body = "
                <p>Nama: $name</p>
                <p>Email: $email</p>
                <p>Nomor Telepon: $number</p>
                <p>Tanggal: $date</p>
            ";
            $mail->AltBody = "
                Nama: $name\n
                Email: $email\n
                Nomor Telepon: $number\n
                Tanggal: $date\n
            ";

            $mail->send();
            echo 'Pesan telah terkirim dan data tersimpan!';
        } catch (PHPMailer\PHPMailer\Exception $e) {
            echo "Pesan terkirim tapi gagal menyimpan data! Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Pesan tidak terkirim dan data tidak tersimpan! Error: ' . mysqli_error($conn);
    }
}

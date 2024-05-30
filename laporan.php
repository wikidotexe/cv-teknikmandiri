<?php
// Memasukkan file connection.php untuk koneksi database dan fungsi getContactFormData
include('connection.php');

// Memanggil fungsi getContactFormData untuk mendapatkan data
$result = getContactFormData();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kontak</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Daftar Client</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . htmlspecialchars($row['name']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>
                        <td>" . htmlspecialchars($row['number']) . "</td>
                        <td>" . htmlspecialchars($row['date']) . "</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Menutup koneksi ke database setelah semua operasi selesai
mysqli_close($conn);
?>

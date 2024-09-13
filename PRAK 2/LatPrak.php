<html>
    <head>
        <title>Hello World</title>
    </head>

    <body>
<?php

    
// Array data mahasiswa
$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi'  => array(98, 65, 74),
    'Nina'  => array(67, 56, 84)
);

// Fungsi untuk menghitung rata-rata
function hitung_rata($array) {
    $total = 0;
    $jumlah = count($array);
    foreach ($array as $nilai) {
        $total += $nilai;
    }
    return $total / $jumlah;
}

// Fungsi untuk menampilkan data mahasiswa
function print_mhs($array_mhs) {
    echo "<table border='1'>";
    echo "<tr><th>Nama</th><th>Nilai 1</th><th>Nilai 2</th><th>Nilai 3</th><th>Rata-rata</th></tr>";
    
    foreach ($array_mhs as $nama => $nilai) {
        echo "<tr>";
        echo "<td>" . $nama . "</td>";
        echo "<td>" . $nilai[0] . "</td>";
        echo "<td>" . $nilai[1] . "</td>";
        echo "<td>" . $nilai[2] . "</td>";
        echo "<td>" . hitung_rata($nilai) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}

// Panggil fungsi untuk mencetak data mahasiswa
print_mhs($array_mhs);
?>
</body>
</html>
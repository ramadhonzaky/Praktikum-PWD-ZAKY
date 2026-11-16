<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
</head>
<body>

<table border="1" cellpadding="5" cellspacing="2">
    <tr>
        <td>bilangan</td>
        <?php
        // Header angka 1 sampai 10 di baris paling atas
        for ($i = 1; $i <= 10; $i++) {
            echo "<td bgcolor='lime'>$i</td>";
        }
        ?>
    </tr>

    <?php
    // Loop untuk baris (1 - 10)
    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";
        // Kolom pertama di setiap baris (warna hijau)
        echo "<td bgcolor='lime'>$baris</td>";

        // Loop untuk isi perkalian kolom (1 - 10)
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;

            // Cek ganjil atau genap untuk warna sel
            if ($hasil % 2 != 0) {
                $warna = "yellow";
            } else {
                $warna = "cyan";
            }

            echo "<td bgcolor='$warna'>$hasil</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
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
        
        for ($i = 1; $i <= 10; $i++) {
            echo "<td bgcolor='lime'>$i</td>";
        }
        ?>
    </tr>

    <?php
    
    for ($baris = 1; $baris <= 10; $baris++) {
        echo "<tr>";
        
        echo "<td bgcolor='lime'>$baris</td>";

    
        for ($kolom = 1; $kolom <= 10; $kolom++) {
            $hasil = $baris * $kolom;

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
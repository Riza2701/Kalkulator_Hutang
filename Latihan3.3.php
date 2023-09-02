<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Angsuran Hutang</title>
</head>
<body>
    <h1>Kalkulator Angsuran Hutang</h1>
    <form method="post" action="">
        <label for="besar_pinjaman">Besar Pinjaman (Rp):</label>
        <input type="text" name="besar_pinjaman" id="besar_pinjaman" required><br><br>
        
        <label for="besar_bunga">Besar Bunga (%):</label>
        <input type="text" name="besar_bunga" id="besar_bunga" required><br><br>
        
        <label for="lama_pinjaman">Lama Pinjaman (bulan):</label>
        <input type="text" name="lama_pinjaman" id="lama_pinjaman" required><br><br>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if(isset($_POST['hitung'])){
        $besar_pinjaman = $_POST['besar_pinjaman'];
        $besar_bunga = $_POST['besar_bunga'];
        $lama_pinjaman = $_POST['lama_pinjaman'];

        // Menghitung besar bunga dalam rupiah
        $besar_bunga_rupiah = ($besar_bunga / 100) * $besar_pinjaman;

        // Menghitung total pinjaman
        $total_pinjaman = $besar_pinjaman + $besar_bunga_rupiah;

        // Menghitung besaran angsuran per bulan
        $besaran_angsuran = $total_pinjaman / $lama_pinjaman;

        echo "<h2>Hasil Perhitungan:</h2>";
        echo "Besar Pinjaman: Rp." . number_format($besar_pinjaman) . "<br>";
        echo "Besar Bunga (%): " . $besar_bunga . "%<br>";
        echo "Total Pinjaman: Rp." . number_format($total_pinjaman) . "<br>";
        echo "Lama Pinjaman (bulan): " . $lama_pinjaman . " bulan<br>";
        echo "Besaran Angsuran per Bulan: Rp." . number_format($besaran_angsuran, 2);
    }
    ?>
</body>
</html>
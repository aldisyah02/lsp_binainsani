    <?php 
    include 'dashboard.php' 
    ?>
        <h1>Perulangan dengan Input</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="kalimat">Kalimat:</label>
        <input type="text" name="kalimat" required><br><br>
        <label for="jumlah">Jumlah Perulangan:</label>
        <input type="number" name="jumlah" required><br><br>
        <input type="submit" value="Proses">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $kalimat = $_POST["kalimat"];
        $jumlah = $_POST["jumlah"];

        // Melakukan perulangan
        echo "<h2>Hasil Perulangan:</h2>";
        for ($i = 1; $i <= $jumlah; $i++) {
            echo $kalimat." ".$i."<br>";
        }
    }
    ?>
    <br>
    <a href="http://lsp1.test/"><- Home</a>
    </div>
</body>
</html>




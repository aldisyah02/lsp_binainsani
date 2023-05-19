<?php 
    include 'dashboard.php' 
?>
<h1>Penjumlahan Dua Bilangan</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Bilangan 1:</label>
        <input type="number" name="num1" required><br><br>
        <label for="num2">Bilangan 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" value="Jumlahkan">
    </form>

    <?php
    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai dari form
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // Melakukan penjumlahan
        $result = $num1 + $num2;

        // Menampilkan hasil penjumlahan
        echo "<h2>Hasil Penjumlahan:</h2>";
        echo "<p>{$num1} + {$num2} = {$result}</p>";
    }
    ?>
    <br>
    <a href="http://lsp1.test/"><- Home</a>
    </div>
</body>
</html>
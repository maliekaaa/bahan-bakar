<?php
include 'proses.php';
$proses = new Beli ();
$proses->setHarga (15420, 16130, 18310, 16510);
if  (isset ($_POST ['kirim'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];


    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>
<form action="" method="post">
    <center>
    <table>
        <tr>
            <td>
            <label for="liter">Masukkan Jumlah Liter : </label>
            <input type="number" id="liter" name="liter" required>
            </td>
        </tr>
        <tr>
            <td>
            <label for="jenis">Pilih Tipe Bahan Bakar : </label>
            <select name="jenis" id="jenis">
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V-Power</option>
                <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                <option value="SVPowerNitro">Shell V-Power Nitro</option>
            </select>
            </td>
        </tr>
        <td><button name="kirim" type="submit">Beli</button></td>
    </table>
    </center>
</body>
</html>

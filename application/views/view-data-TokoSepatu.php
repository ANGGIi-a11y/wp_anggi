<!DOCTYPE html>
<html>
<head>
    <title>REKAP TRANSAKSI</title>
</head>

<body>
    <center>
        <table bgcolor="pink">
            <tr>
                <th colspan="5">
                    <h3>TOKO SEPATU ROSE DAWSON</h3>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
                <td><?= $Nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td>:</td>
                <td><?= $No ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>MERK SEPATU</td>
                <td>:</td>
                <td><?= $Merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $Size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp. <?= $Harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/TokoSepatu' ?>">KEMBALI</a></button></p>
    </center>
</body>
</html>
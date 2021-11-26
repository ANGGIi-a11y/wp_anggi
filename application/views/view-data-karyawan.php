<html>
    <head>
        <title>SLIP GAJI KARYAWAN</title>
    </head>
    <body>
    <table>

    <tr>
        <th colspan="3">
            SLIP GAJI KARYAWAN
        </th>
    </tr>
    <tr>
        <td colspan="3">
            <hr>
    </td>
    </tr>
    <tr>
        <th>NIK</th>
        <th>:</th>
        <td><?= $nik; ?></td>
    </tr>
    <br>
    <tr>
        <th>Nama Karyawan</th>
        <th>:</th>
        <td><?= $nama; ?></td>
    </tr>
    <br>
    <tr>
        <th>Jabatan</th>
        <th>:</th>
        <td><?= $jabatan; ?></td>
    </tr>
    <br>
    <tr>
        <th>Gaji Pokok</th>
        <th>:</th>
        <td><?= $gaji; ?></td>
    </tr>
    <br>
    <tr>
        <th>Status</th>
        <th>:</th>
        <td><?= $status; ?></td>
    </tr>
    <br>
    <tr>
        <th>Tunjangan</th>
        <th>:</th>
        <td><?= $tunjangan; ?></td>
    </tr>
    <br>
    <tr>
        <th>Potongan BPJS</th>
        <th>:</th>
        <td><?= $potongan; ?></td>
    </tr>
    <hr>
    <?php
        $total = ($gaji + $tunjangan) - $potongan;
    ?>
    <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td><br>
        <?= $total; ?>
    </td>
    <tr>
        <td><a href="<?= base_url('gajikaryawan');?>">Kembali</a></td>
        <td></td>
        <td></td>
    </tr>

    </table>

</body>
</html>
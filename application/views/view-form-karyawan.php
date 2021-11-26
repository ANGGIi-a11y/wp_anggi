<html>
<head>
	<title>INPUT DATA GAJI KARYAWAN</title>
</head>
<body>
    <center>
<form action ="<?= base_url('gajikaryawan/cetak'); ?>" method="post">
<table>
    <tr>
        <th colspan="3">
            INPUT DATA GAJI KARYAWAN
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
    <td>
        <input type="text" name="nik" id="nik" placeholder="Masukan NIK Anda">
    </td>
</tr>
<tr>
    <th>Kode Jabatan</th>
    <td>:</td>
    <td>
        <select name="jabatan">
            <option value="">Pilih Kode</option>
            <?php
                foreach ($k_jabatan as $k) {
                    echo "<option value='$k'>$k</option>";
                }
            ?>
        </select>
    </td>
</tr>
    <tr>
    <th>Kode Status</th>
    <td>:</td>
    <td>
        <select name="status">
            <option value="">Pilih Status</option>
            <?php
                foreach ($status as $s) {
                    echo "<option value='$s'>$s</option>";
                }
            ?>
        </select>
    </td>
</tr>
<tr>
    <th>Jumlah Anak</th>
    <th>:</th>
    <td>
        <input type="text" name="anak" placeholder="Masukan Jumlah Anak">
</td>
</tr>
<tr>
    <td colspan="3" align="center">
        <input type="submit" value="Submit">
 </td>
 </tr>
</center>
</body>
</html>
</table>
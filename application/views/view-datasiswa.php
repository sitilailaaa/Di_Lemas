<html>
    <head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="8">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>nama siswa</th>
                <th>:</th>
                <td>
                    <?= $namasiswa; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $NIS; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggalahir; ?>
                </td>
            </tr>
            <tr>
                <td>tempat lahir</td>
                <td>:</td>
                <td>
                    <?= $tempatlahir; ?>
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
                <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <a href="<?= base_url('datasiswa'); 
?>">Kembali</a>
                    </td>
                    </tr>
        </table>
    </center>
</body>
</html>
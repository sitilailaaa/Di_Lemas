<!DOCTYPE html>
<html>
    <head>
        <title>Tampil Data Siswa</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Siswa
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <hr>
                    </th>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nis</td>
                    <th>:</th>
                    <td>
                        <?= $nis; ?>
                    </td>
                </tr>
                <tr>
                    <td>kelas</td>
                    <th>:</th>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <th>:</th>
                    <td>
                        <?= $tanggal; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <th>:</th>
                    <td>
                        <?= $tempat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <th>:</th>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <th>:</th>
                    <td>
                        <?= $jk; ?>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <th>:</th>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url("datasiswa"); ?>"> Kembali ke Form Input </a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>

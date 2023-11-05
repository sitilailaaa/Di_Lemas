<html>
    <head>
        <title>Form Input Data Siswa</title>
    </head>
    <body>
        <center>
                <form action="<?= base_url("datasiswa/cetak") ?>" method="post">
                    <table>
                        <tr>
                            <th colspan="3">
                                Form Input Data Siswa
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
                                <input type="text" name="nama" id="nama">
                            </td>
                        </tr>
                        <?= form_error("nama");?>
                        <tr>
                            <th>Nis</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="nis" id="nis">
                            </td>
                        </tr>
                        <?= form_error("nis");?>
                        <tr>
                            <th>Kelas</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="kelas" id="kelas">
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="tanggal" id="tanggal">
                            </td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="tempat" id="tempat">
                            </td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="alamat" id="alamat">
                            </td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>
                                <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                                <input type="radio" name="jk" value="Perempuan">Perempuan
                            </td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td>:</td>
                            <td>
                                <select name="agama" id="agama">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                    <option value="Ateis">Ateis</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="SUBMIT" value="SUBMIT">
                            </td>
                        </tr>
                    </table>
                </form>
        </center>
    </body>
</html>

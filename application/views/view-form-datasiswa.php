<html>
<head>
    <title>Form Input Datasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>"method="post">
        <table>
            <tr>
                <th colspan="8"> Form Input Data Siswa</th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="Nama Siswa" id="namasiswa">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="NIS" id="NIS">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="Kelas" id="Kelas">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="Tanggal Lahir" id="tanggallahir">
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="Tempat Lahir" id="tempatlahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><input type="text" name="Alamat" id="alamat"></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio">
                    <label for="Laki-Laki">Laki-Laki</label>
                    
                    <input type="radio">
                    <label for="Perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="Agama" id="Agama">
                        <option value="">Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Kristen</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <input type="submit" value="Submit">

                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>
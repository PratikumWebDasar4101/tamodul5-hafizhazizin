<?php
    session_start();
?>
<form action="proses.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="text" name="nim" pattern="\d*" maxlength="10" min="0" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="25" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>Pria<input type="radio" name="jk" value="Pria">
                Wanita<input type="radio" name="jk" value="Wanita"></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td> <select name="fakultas">
                    <option value="FIT"name="FIT">FIT</option>
                    <option value="FKB"name="FKB">FKB</option>
                    <option value="FIK"name="FIK">FIK</option>
                    <option value="FTE"name="FTE">FTE</option>
                </select></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td><select name="prodi">
                    <option value="SI"name="SI">S1 Sistem Informasi</option>
                    <option value="MI"name="MI">D3 Manajemen Informatika</option>
                    <option value="DKV"name="DKV">Design Komunikasi Visual</option>
                    <option value="TK"name="TK">D3 Teknik Komputer</option>
              </select></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>Futsal      <input type="checkbox" name="hobby[]" value="Futsal">
                Ngegame     <input type="checkbox" name="hobby[]" value="Ngegame">
                Baca Buku   <input type="checkbox" name="hobby[]" value="Baca Buku">
                Renang      <input type="checkbox" name="hobby[]" value="Renang">
                Basket      <input type="checkbox" name="hobby[]" value="Basket"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" pattern="[a-z0-9._%+-]+@gmail.com" required></td>
        </tr>
        <tr>
            <td>Upload</td>
            <td>:</td>
            <td><input type="file" name="file" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<?php
    $koneksi=mysqli_connect("localhost","root","","uts");
    if (isset($_POST['simpan'])) {
        $nim=mysqli_real_escape_string($koneksi, $_POST['nim']);
        $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
        $prodi=mysqli_real_escape_string($koneksi, $_POST['prodi']);
        $shift=mysqli_real_escape_string($koneksi, $_POST['shift']);
        $angkatan=mysqli_real_escape_string($koneksi, $_POST['angkatan']);
        $tempat_lahir=mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
        $tgl_lahir=mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
        $agama=mysqli_real_escape_string($koneksi, $_POST['agama']);
        $jk=mysqli_real_escape_string($koneksi, $_POST['jk']);
        $no_hp=mysqli_real_escape_string($koneksi, $_POST['no_hp']);

        $simpan=mysqli_query($koneksi,"INSERT INTO data_mhs VALUES('$nim','$nama','$prodi','$shift','$angkatan','$tempat_lahir','$tgl_lahir','$agama','$jk','$no_hp')");
        if ($simpan) {
            echo "<script>window.alert('Data Mahasiswa Berhasil Disimpan')
            window.location='index.php'</script>";
        }else{
            echo "<script>window.alert('Data Mahasiswa Gagal Disimpan')
            window.location='index.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS HAFIZ SYAHPUTRA</title>
</head>
<body>
    <form action="" method="post">
        <h1>Input Data Mahasiswa</h1>
        <table>
            <tr>
                <td>
                    Nim  
                </td>
                <td>
                    <input type="text" placeholder="Nim" name="nim" required>
                </td>
            </tr>
            <tr>
                <td>
                    Nama 
                </td>
                <td>
                    <input type="text" placeholder="Nama" name="nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    Prodi
                </td>
                <td>
                    <input type="text" placeholder="Prodi" name="prodi" required>
                </td>
            </tr>
            <tr>
                <td>
                    Shift Kuliah
                </td>
                <td>
                    <input type="text" placeholder="Shift Kuliah" name="shift" required>
                </td>
            </tr>
            <tr>
                <td>
                    Angkatan  
                </td>
                <td>
                    <input type="number" maxlength="4" placeholder="Tahun Angkatan" name="angkatan" required>
                </td>
            </tr>
                <td>
                    Tempat Lahir  
                </td>
                <td>
                    <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" required>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Lahir 
                </td>
                <td>
                    <input type="text" placeholder="DD/MM/YYYY" name="tgl_lahir" required>
                </td>
            </tr>  
            <tr>  
                <td>
                    Agama  
                </td>
                <td>
                    <input type="text" placeholder="Agama" name="agama" required>
                </td>
            </tr>   
            <tr> 
                <td>
                    Jenis Kelamin 
                </td>
                <td>
                    <input type="radio" name="jk" value="Pria ">Laki-Laki
                    <input type="radio" name="jk" value="Pria ">Perempuan
                </td>
            </tr>   
            <tr> 
                <td>
                    Nomor Handphone
                </td>    
                <td>
                    <input type="text" placeholder="Nomor Handphone" name="no_hp" required>
                </td>
            </tr>
            <tr> 
                <td>
                    <input type="submit" name="simpan" value="Simpan Data">
                </td>    
            </tr>
        </table>
    </form>
</body>
</html>
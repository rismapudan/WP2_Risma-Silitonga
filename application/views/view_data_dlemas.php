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
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <td>Nama</td> 
                <td>:</td> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>NIM</td> 
                <td>:</td> 
                <td> 
                    <?= $nim; ?> 
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
            
            </td> 
            </tr> 
            <tr> 
                <td>Tanggal</td> 
                <td>:</td> 
                <td> 
                    <?= $tanggal; ?> 
                </td> 
            </tr> 
            <tr> 

            </td> 
            </tr> 
            <tr> 
                <td>Tempat</td> 
                <td>:</td> 
                <td> 
                    <?= $tempat; ?> 
                </td> 
            </tr> 
            <tr>
                
            </td> 
            </tr> 
            <tr> 
                <td>Alamat</td> 
                <td>:</td> 
                <td> 
                    <?= $alamat; ?> 
                </td> 
            </tr> 
            <tr>
                
            </td> 
            </tr> 
            <tr> 
                <td>Jenis Kelamin</td> 
                <td>:</td> 
                <td> 
                    <?= $jenis_kelamin; ?> 
                </td> 
            </tr> 
            <tr> 

            </td> 
            </tr> 
            <tr> 
                <td>Agama</td> 
                <td>:</td> 
                <td> 
                    <?= $agama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                <a href="<?= base_url('dlemas'); ?>">Kembali</a> 
                </td>
            </tr> 
        </table> 
    </center> 
</body> 

</html>

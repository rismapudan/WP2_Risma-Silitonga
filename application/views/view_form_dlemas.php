<html> 
<head> 
    <title>Form Input Data Siswa</title> 
</head> 

<body> 
    <center> 
        <form action="<?= base_url('dlemas/cetak'); ?>" method="post"> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Form Input Data Siswa
                </th> 
            </tr>
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
            
            <th>Nama Siswa</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="nama" id="nama" placeholder="">
                    <div class="invalid-feedback"><?= form_error('nama') ?></div>
                
                </td> 
            </tr> 
            <tr> 

                <th>NIM</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="nim" id="nim" placeholder="">
                    <div class="invalid-feedback"><?= form_error('nim') ?></div>
                </td> 
            </tr> 
            <tr> 

            </td> 
            </tr> 
            <tr> 

                <th>Kelas</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="kelas" id="kelas" placeholder="">
                    <div class="invalid-feedback"><?= form_error('kelas') ?></div>
                </td> 
            </tr> 
        <tr> 

            </td> 
            </tr> 
            <tr> 

            <th>Tanggal</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="tanggal" id="tanggal" placeholder="">
                    <div class="invalid-feedback"><?= form_error('tanggal') ?></div>
                
                </td> 
            </tr> 
            <tr>
                
            </td> 
            </tr> 
            <tr> 

                <th>Tempat Lahir</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="tempat" id="tempat" placeholder="">
                    <div class="invalid-feedback"><?= form_error('tempat') ?></div>
                </td> 
            </tr> 
            <tr> 

            </td> 
            </tr> 
            <tr> 

                <th>Alamat</th> 
                <td>:</td> 
                <td> 
                    <input type="text" name="alamat" id="alamat" placeholder="">
                    <div class="invalid-feedback"><?= form_error('nama') ?></div>
                </td> 
            </tr> 
            <tr>  
              
            </td> 
            </tr> 
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value
                    ="Pria" checked="">Pria
                    <input type="radio" name="jenis_kelamin" value
                    ="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
                <th>Agama</th> 
                <td>:</td> 
                <td> 
                    <select name="agama" id="agama"> 
                        <option value="">Pilih Agama</option> 
                        <option value="Kristen Protestan">Kristen Protestan</option> 
                        <option value="Islam">Islam</option> 
                        <option value="Katolik">Katolik</option> 
                    </select> 
                    <div class="invalid-feedback"><?= form_error('agama') ?></div>
                </td> 
            </tr> 
        <tr> 
            <td colspan="3" align="center"> 
                <input type="submit" value="Submit"> 
                </td> 
            </tr> 
        </table> 
    </form> 
</center> 
</body> 

</html>

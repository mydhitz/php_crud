<?php
include_once("koneksi.php"); 
//memanggil file koneksi.php agar dapat terhubung antara database dan file 

$hasil = mysqli_query($mysqli, "SELECT * FROM tabel_user ORDER BY id DESC");
//hasil merupakan nama variabel yang memiliki nilai yaitu mysqli_query dimana mysqli query 
//akan mengeksekusi perintah sql yaitu "SELECT * FROM user ORDER BY id DESC" user merupakan 
//nama table yang ada di database.
?>
<html>
<head>    
    <title>Homepage</title>
</head>
<body>
<a href="tambah.php">Tambah User Baru</a><br/><br/>
    <table width='80%' border=1>
    <tr>
        <th>Nama</th> <th>Mobile</th> <th>Email</th> <th>Alamat</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($hasil)) {   
	//while merupakan perulangan yang akan mengulang nama variable dari user_data dimana memiliki nilai yaitu variable hasil.
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>"; 	
					//user_data merupakan variable yang akan memanggil nama kolom yang ada didatabase yaitu nama
        echo "<td>".$user_data['mobile']."</td>"; 	
					//user_data merupakan variable yang akan memanggil nama kolom yang ada didatabase yaitu mobile
        echo "<td>".$user_data['email']."</td>";    
					//user_data merupakan variable yang akan memanggil nama kolom yang ada didatabase yaitu email
		echo "<td>".$user_data['alamat']."</td>"; 
					//user_data merupakan variable yang akan memanggil nama kolom yang ada didatabase yaitu email
		echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td></tr>";   
    }
    ?>
    </table>
</body>
</html>

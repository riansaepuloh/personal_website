<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
	$username = $_GET['id'];
} else {
	die ("Error, Tidak ada id terpilih");
}
// tampilkan data
$query =  "SELECT *FROM user WHERE username='$username'";

$sql = mysql_query($query);
$hasil = mysql_fetch_array($sql);

$username = $hasil['username'];
$password = $hasil['password'];
$email = $hasil['email'];
// proses edit
if(isset($_POST['edit'])){
$username1 = $_POST['username1'];
$password1 = $_POST['password1'];
$email1 = $_POST['email1'];

// update data
$query = "UPDATE `user` SET `username` = '$username1' , `password` = '$password1' , `email` = '$email1' WHERE `username` = '$username';";
$sql = mysql_query($query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=user'>";
} else {
	echo "Data gagal di edit";
	}
}	
 ?>
 <br>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel fresh-color panel-info">
                        <div class="panel-heading">
                            Karyawan
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">

                     <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Username : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Username" name="username1" value="<?php echo $username; ?>">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> Password : </label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" id="contract-name" name="password1" value="<?php echo $password; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label"> E-mail : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Email" name="email1" value="<?php echo $email; ?>">
                        </div>
                    </div>  
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    <a href="index.php?page=user" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
                        </div>
    </div>
</div>

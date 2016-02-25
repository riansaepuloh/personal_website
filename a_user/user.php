
             <?php 
                include"koneksi.php";
                $hasil=mysql_query("SELECT *FROM user;");
             ?>

            <!-- Main Content -->
                    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                        <div class="panel-heading">

                                    <div class="panel-title">
                                    <div class="title">User</div>
                                    </div>
                                </div>
                                <div class="panel-body">

                                     <!-- Modal -->
                                        <div class="modal fade modal-success" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                       
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="a_user/simpan_user.php" method="post">
                                                    <div class="modal-body">
                                                         

                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder=" Username" name="username">
                                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="form-group has-feedback">
                                                            <input type="password" class="form-control has-feedback-left" id="inputSuccess4" placeholder=" Password" name="password">
                                                            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                                                        </div>

                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder=" Email" name="email">
                                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                                        </div>
                                                         
                                                       
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                                        <button type="submit" class="btn btn-success" ><span class="icon fa fa-user-plus"></span> Tambah</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                        <div class="clearfix margin-bottom-10">
                              <div class="btn-group">                               
                              <a href="#daftar" data-toggle="modal" class="btn btn-success"><span class="icon fa fa-plus"></span>
                                 Tambah Data 
                                 </a>
                              </div>
                              
                        </div>
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>E-mail</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['username']?></td>
                                                <td><?php echo $kolom['password']?></td>
                                                <td><?php echo $kolom['email']?></td>
                                                <td>

                                                    <a class="btn btn-info btn-xs" href="index.php?page=edit_user&id=<?php echo $kolom['username']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                    <a class="btn btn-danger btn-xs" href="a_user/hapus_user.php?page=hapus_user&id=<?php echo $kolom['username'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                            <?php 
                                            }
                                        }
                                        else {
                                            echo "data kosong";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


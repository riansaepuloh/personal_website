
             <?php 
                include"koneksi.php";
                $hasil=mysql_query("SELECT *FROM post;");
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


                                    <div class="clearfix margin-bottom-10">
                                          <div class="btn-group">                               
                                          <a href="index.php?page=new_post" data-toggle="modal" class="btn btn-success"><span class="fa fa-pencil-square-o"></span>
                                             New Post 
                                             </a>
                                          </div>
                                          
                                    </div>
                        
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No.Post</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Tanggal</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                        if($hasil != null){
                                            while($kolom=mysql_fetch_array($hasil)){
                                            ?>
                                            <tr>
                                                <td><?php echo $kolom['id_post']?></td>
                                                <td><?php echo $kolom['judul']?></td>
                                                <td><?php echo $kolom['isi']?></td>
                                                <td><?php echo $kolom['tanggal']?></td>
                                                <td>
                                                    <?php 
                                                    $foto = $kolom['gambar'];
                                                if (empty($foto)) 
                                                    echo "<strong><img src='../images/user.jpg' width='50' height='50'> <br></strong>";
                                                    else
                                                echo"<img src='images/$foto' width=75 heigth=25/ >"
                                                ?>
                                                </td>
                                                <td>

                                                    <a href="index.php?page=edit_post&id=<?php echo $kolom['id_post']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                    |
                                                    <a href="a_post/hapus_post.php?page=hapus_post&id=<?php echo $kolom['id_post'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><span class="fa fa-trash"></span></a>
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


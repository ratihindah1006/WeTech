<div class="col-sm-12">
        <h3 class="mt-2">User Terdaftar</h3>
        <a href="<?= base_url('Terdaftar/addUser')?>" class="btn btn-primary mb-3">Add User</a>
         <?php
         if(!empty(session()->getFlashdata('success')))
         {
             ?>
             <div classs="alert alert-success">
                 <?= session()->getFlashdata('succses');?>
             </div>
             <?php
         }
         ?>
         <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th >no</th>
                                <th >nama</th>
                                <th >email</th>                            
                                <th >role id</th>
                                <th >is active</th>
                                <th >date created</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no=1;
                                foreach ($user as $key => $value){
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>                                    
                                        <td><?= $value['nama'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['role_id'] ?></td>
                                        <td><?= $value['is_active'] ?></td>
                                        <td><?= $value['date_created'] ?></td>
                                        <td>
                                            <a href="<?= base_url('Terdaftar/editUser/'.$value['user_id'])?>" class="btn btn-warning">edit</a>
                                            <a href="<?= base_url('Terdaftar/deleteUser/'.$value['user_id'])?>" class="btn btn-danger" onclick="return confirm('apakah yakin akan menghapus film ini?')">delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
           
                       
               
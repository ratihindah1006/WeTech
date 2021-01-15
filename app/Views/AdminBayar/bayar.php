<div class="col-sm-12">
        <h3 class="mt-2">Verifikasi Pembayaran</h3>
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
                                <th>No</th>
                                <th >checkout id</th>
                                <th >movie id</th>
                                <th >title</th>
                                <th >tanggal</th>
                                <th >jam</th>
                                <th >Total Bayar</th>
                                <th >bayar</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no=1;
                                foreach ($checkout as $key => $value){
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['id_checkout'] ?></td>
                                        <td><?= $value['movie_id'] ?></td>
                                        <td><?= $value['title'] ?></td>                                       
                                        <td><?= $value['tanggal'] ?></td>
                                        <td><?= $value['jam'] ?></td>
                                        <td><?= $value['total_bayar'] ?></td>
                                        <td><?= $value['bayar'] ?></td>
                                     
                                        <td>
                                            <a href="<?= base_url('Checkout/editCheckout/'.$value['id_checkout'])?>" class="btn btn-warning">edit</a>
                                            <a href="<?= base_url('Checkout/deleteCheckout/'.$value['id_checkout'])?>" class="btn btn-danger" onclick="return confirm('apakah yakin akan menghapus data ini?')">delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
           
                       
               
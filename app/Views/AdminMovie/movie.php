 <div class="col-sm-12">
        <h3 class="mt-2">Movie</h3>
         <a href="addMovie" class="btn btn-primary mb-3">Add Movie</a>
         <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th >movie_id</th>
                                <th >img</th>
                                <th >tittle</th>
                                <th >genre</th>
                                <th >duration</th>
                                <th >released_at</th>
                                <th >producer</th>
                                <th >sutradara</th>
                                <th >cast</th>
                                <th >sinopsis</th>
                                <th >is_active</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                                foreach ($movie as $key => $value){
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $value['img'] ?></td>
                                        <td><?= $value['title'] ?></td>
                                        <td><?= $value['genre'] ?></td>
                                        <td><?= $value['duration'] ?></td>
                                        <td><?= $value['released_at'] ?></td>
                                        <td><?= $value['producer'] ?></td>
                                        <td><?= $value['sutradara'] ?></td>
                                        <td><?= $value['cast'] ?></td>
                                        <td><?= $value['sinopsis'] ?></td>
                                        <td><?= $value['is_active'] ?></td>
                                        <td>
                                            <a href="EditMovie" class="btn btn-warning">edit</a>
                                            <a href="" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
           
                       
               
<br><br><br>
    
    <div class="container"  >

    <div class="col-md-6" >
    <div class="card bg-warning" >
    

              <div align ="center"></br></br></br>
                <h3 >Edit User Terdaftar</h3>
              </div> </br></br></br>
              <form action ="<?= base_url('terdaftar/updateUser/'.$user['user_id']);?>" method="post"  >
              
              <div class="card-body" >
                  
                  <div class="form-group">
                  <label>Nama : </label>
                    <input name="nama" type="text" class="form-control"  value="<?= $user['nama']?>">
                  </div>

                  <div class="form-group">
                  <label>Email : </label>
                    <input name="email" type="text" class="form-control"  value="<?= $user['email']?>">
                  </div>

                  
                  <div class="form-group">
                  <label>Role Id : </label>
                    <input name="role_id" type="number" class="form-control"  value="<?= $user['role_id']?>">
                  </div>

                  <div class="form-group">
                  <label>Is Active : </label>
                    <input name="is_active" type="number" class="form-control"  value="<?= $user['is_active']?>">
                  </div>

                  
                  
                </div> </br></br></br>
                <!-- /.card-body -->

                <div class="card-footer" align="center">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form> </br></br></br>

              
              
              
            







<br><br><br>
    
    <div class="container"  >

    <div class="col-md-6" >
    <div class="card bg-warning" >
    

              <div align ="center"></br></br></br>
                <h3 >Add User Terdaftar</h3>
              </div> </br></br></br>
              <form action ="<?= base_url('terdaftar/save_add');?>" method="post"  >
              <div class="card-body" >
                  
                  <div class="form-group">
                  <label>Nama : </label>
                    <input name="nama" type="text" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Email : </label>
                    <input name="email" type="text" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Password : </label>
                    <input name="password" type="password" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Role Id : </label>
                    <input name="role_id" type="number" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Is Active : </label>
                    <input name="is_active" type="number" class="form-control" >
                  </div>

                  <div class="form-group">
                  <label>Date Created : </label>
                    <input name="date_created" type="date" class="form-control" >
                  </div>
                  
                  
                </div> </br></br></br>
                <!-- /.card-body -->

                <div class="card-footer" align="center">
                <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form> </br></br></br>

              
              
              
            







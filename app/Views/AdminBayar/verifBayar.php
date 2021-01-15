<br><br><br>
    
    <div class="container"  >

    <div class="col-md-6" >
    <div class="card bg-warning" >
    

              <div align ="center"></br></br></br>
                <h3 >Edit Checkout</h3>
              </div> </br></br></br>
              <form action ="<?= base_url('checkout/updateCheckout/'.$checkout['id_checkout']);?>" method="post"  >
              
                <div class="card-body" >

                <div class="form-group">
                  
                  <div class="form-group">
                  <label>Title : </label>
                    <input name="title" type="text" class="form-control" value="<?= $checkout['title']?>" >
                  </div>
                  
                  <div class="form-group">
                  <label>Tanggal : </label>
                    <input name="tanggal" type="text" class="form-control" value="<?= $checkout['tanggal']?>" >
                  </div>

                  <div class="form-group">
                  <label>Jam : </label>
                    <input name="jam" type="time" class="form-control" value="<?= $checkout['jam']?>">
                  </div>

                  <div class="form-group">
                  <label>Total Bayar : </label>
                    <input name="total_bayar" type="date" class="form-control" value="<?= $checkout['total_bayar']?>" >
                  </div>

                  <div class="form-group">
                  <label>Bayar : </label>
                    <input name="bayar" type="number" class="form-control" value="<?= $checkout['bayar']?>">
                  </div>

                  
                  
                  
                </div> </br></br></br>
                <!-- /.card-body -->

                <div class="card-footer" align="center">
                <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form> </br></br></br>

              
              
              
            







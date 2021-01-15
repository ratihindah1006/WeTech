<br><br><br>

<div class="container">

  <div class="col-md-6">
    <div class="card bg-warning">


      <div align="center"></br></br></br>
        <h3>CHECKOUT</h3>
      </div> </br></br></br>
      <form method="post" action="<?= base_url('Checkout/save'); ?>">

        <div class="card-body">

          <div class="form-group">
            <label>Judul : </label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?= $movie['title']; ?>" readonly>
          </div>

          <div class="form-group">
            <label>Tanggal : </label>
            <input type="date" class="form-control" name="tanggal" required>
          </div>
          <div class="form-group">
            <label>Jam : </label>
            <input type="time" class="form-control" name="jam" required>
          </div>


        </div> </br></br></br>
        <!-- /.card-body -->

        <div class="card-footer" align="center">
          <button type="submit" class="btn btn-primary">Checkout</button>
        </div>
      </form> </br></br></br>
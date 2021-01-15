<br><br><br>

<div class="container">

  <div class="col-md-6">
    <div class="card bg-warning">


      <div align="center"></br></br></br>
        <h3>Upload Bukti Pembayaran</h3>
      </div> </br></br></br>
      <form method="post" action="<?= base_url('Bukti/save'); ?>" enctype="multipart/form-data">
        <div class="card-body">

          <div class="form-group">
            <label>Bukti Pembayaran : </label>
            <input type="file" name="file_upload" class="form-control">
          </div>


        </div> </br></br></br>
        <!-- /.card-body -->

        <div class="card-footer" align="center">
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form> </br></br></br>
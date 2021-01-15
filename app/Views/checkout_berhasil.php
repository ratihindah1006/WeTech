<br><br><br>

<div class="container">

  <div class="col-md-9">
    <div class="card bg-warning">


      <div align="center"></br></br></br>
        <h3>PEMBAYARAN</h3>
      </div> </br></br></br>
      <form method="post">

        <div class="card-body">

          <div class="form-group">
            <label>&nbsp;&nbsp;Judul Film : <?= $checkout['title']; ?></label>

          </div></br>

          <div class="form-group">
            <label>&nbsp;&nbsp;Tanggal : <?= $checkout['tanggal']; ?></label>

          </div></br>

          <div class="form-group">
            <label>&nbsp;&nbsp;Jam : <?= $checkout['jam']; ?></label>

          </div></br>

          <div class="form-group">
            <label>&nbsp;&nbsp;Total Bayar : <?= $checkout['total_bayar']; ?></label>

          </div></br>

          <div class="form-group" align="center">
            <label>&nbsp;&nbsp;Bayar Ke : xxxxxxxxxxxxx</label>

          </div></br>


        </div> </br></br></br>


        <div class="card-footer" align="center">
          <a href="/Bukti" class="btn btn-primary ">Bayar</a>
        </div>
      </form> </br></br></br>
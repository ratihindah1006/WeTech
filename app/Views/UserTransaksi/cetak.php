<!DOCTYPE html>
<html>

<head>
  <title>Bioskop</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/font-awesome/css/all.css">
  <!-- Custom Theme files -->
  <script src="js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--webfont-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<br><br>
<a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="window.print()" class="btn btn-outline-secondary shadow">Print <i class="fa fa-print"></i></button></a>
<br><br>

<div class="container">

  <div class="col-md-9">
    <div class="card bg-warning">


      <div align="center">
      </div> </br></br>
      <form method="post">

        <center>
          <div class="mb-5">
            <h1>Invoice Pemesanan Tiket</h1>
          </div>
        </center>

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


        </div> </br></br></br>

      </form>

      <script type="text/javascript" src="js/jquery.flexisel.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</body>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4byb2-1fc5e70f-4099-4e15-b194-7f450ac735fe.png/v1/fill/w_800,h_800,strp/avengers__endgame__2019__avengers_snap_logo_png__by_mintmovi3_dd4byb2-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9ODAwIiwicGF0aCI6IlwvZlwvODQ2YTkwODYtOGE0MC00M2UwLWFhMTAtMmZjN2Q2ZDczNzMwXC9kZDRieWIyLTFmYzVlNzBmLTQwOTktNGUxNS1iMTk0LTdmNDUwYWM3MzVmZS5wbmciLCJ3aWR0aCI6Ijw9ODAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.soebOX2_vOWgPcZuFxyAq5rPW2okbZogwJUq0YwF3PE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Apon</title>
    <?php include 'headerPembayaran.php';?>
    <style>
      p{
        text-align:center;
        color:white;
      }
    </style>
  </head>
  <body>
    <h4 style="margin-left:6%; margin-top:2%;">Pembayaran <span style="color:#F35410">Transfer</span></h4>
    <h6 style="margin-left:6%; margin-top:2%; font-size:15px">* Bukti Pembayaran di atm harap dibawa untuk tanda bukti</h6>
    <div class="container" style="border:1px solid #F35410; margin-top:3%; border-radius:3px; margin-bottom:3%;">
      <div class="row" style="background-color:#F35410; padding-top:5px;">
        <div class="col-sm-8">
          <p>Jumlah Yang Harus Dibayar</p>
        </div>
        <div class="col-sm-4">
          <p><?php echo $total ?></p>
        </div>
      </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="row">
          <div class="col">
            <h6 style="margin-top:20px; margin-bottom:20px;">Rekening Bank</h6>
            <h6 style="margin-top:20px; margin-bottom:20px;">Atas Nama : APON</h6>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php echo base_url(); ?>Asset/group 15.png" alt="" style="width:250%;">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php echo base_url(); ?>Asset/group 16.png" alt="" style="width:250%; margin-top:5%; margin-bottom:5%;">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php echo base_url(); ?>Asset/group 17.png" alt="" style="width:250%; margin-bottom:5%;">
          </div>
        </div>
      </div>
      <div class="col-sm-4" style="border-left:1px solid grey; margin-left:5%;">
        <div class="row">
          <div class="col">
            <center><h6 style="margin-top:20px; margin-bottom:20px;">Alamat Pengambilan dan Pembayaran Obat</h6></center>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center><img src="<?php echo base_url(); ?>Asset/gambar 1.png" alt="" style="margin-top:3%; width:200px; margin-top:5%;"></center>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center><img src="<?php echo base_url(); ?>Asset/Alamat.png" alt="" style="margin-top:15%; margin-bottom:3%; width:300px;"></center>
          </div>
        </div>
      </div>
    </div>

    </div>

  </body>
</html>

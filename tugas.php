<html>
    <head>
        <title>Luas Segitiga</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
        <body>
          <div class="container">

        <form method="post" action="tugas.php" >
        <h3>Menghitung Luas bangun datar</3> </br> </br>

          <input name="check1" type="checkbox" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Segi Tiga</input>
          <input name="check2" type="checkbox" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">persegi</input>
          <input name="check3" type="checkbox" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">lingkaran</input>
        </br> </br>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                      <label>Alas:</label>
                      <form action="contoh.php" method="post">
                      <input name="alas" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tinggi:</label>
                      <input name="tinggi" type="text" class="form-control">
                    </div>
                    <button name="luas" type="submit" class="btn btn-default">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                    <div class="form-group">
                      <label>jari - jari :</label>
                      <form action="tugas.php" method="post">
                      <input name="jari" type="text" class="form-control">
                    </div>
                    <button name="luas" type="submit" value="hasil" class="btn btn-default">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

            <?php
            $alas=$_REQUEST['alas'];
            $tinggi=$_REQUEST['tinggi'];
            $jari=$_REQUEST['jari'];

            if (isset($_POST['check1'])) {
              $luas=($alas*$tinggi)/2;
            }elseif ($_POST['check2']) {
              $luas=$alas*$tinggi;
            }else {$_POST['check3'];
              $luas= 3.14*$jari*$jari;
            }
            echo "Jadi luas bangun datar yaitu = ".$luas;

?>

          </div>
        </form>

        </div>
    </body>
</html>

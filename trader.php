<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
require ('json/bitBayApi.php');
require ('json/bittrexApi.php')
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trader Help</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Trader Help</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!--  <ul class=" mr-auto">
            <li class="nav-item">

            </li>
          </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            -->
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <main role="main" class="col">
            <h4>BitBay.net</h4>
        <section class="row text-center placeholders">
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/USDT-BTC.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberBTC . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ BTC ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-BCC.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberBCC . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ BCC ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-ETH.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberETH . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ ETH ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-LSK.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberLSK . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ LSK ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-GAME.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberGAME . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ GAME ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-LTC.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberLTC . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ LTC ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-DASH.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberDASH . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ DASH ]</div>
            </div>
            <div class="col-4 col-sm-2 placeholder">
                 <img src="img/BTC-BTG.png" width="50" height="50" class="img-fluid rounded-circle" alt="Currency thumbnail" />
                <span class="price placeholder">
                  <p>
                      <?= $bit_format_numberBTG . ' PLN'; ?>
                  </p>
              </span>
              <div class="text-muted">[ BTG ]</div>
            </div>
        </section>
            <h4>Bittrex.com</h4>
         <section class="row text-center placeholders">

             <?php foreach($dane as $item): ?>
             
             <div class="col-4 col-sm-2 placeholder">
              <!-- /*<img src="img/<?php echo $item->MarketName;?>.png" width="50" height="50" class="img-fluid rounded-circle" alt="img/alt.png" />*/ -->
                 <img src="img/<?php echo $item->MarketName;?>.png"  width="50" height="50" class="img-fluid rounded-circle" onerror="this.src='img/NOIMAGE.png';" alt="Missing Image" />

              <span class="price placeholder">
                  <p>
                       <?php $showUsdPrice = $usdPrice * number_format($item->Last, 8, '.', ''); ?>
                      <?php $showPlnPrice = $plnPrice * number_format($item->Last, 8, '.', ''); ?>
                      <?php if(in_array($symbolWaluty[$item->MarketName], array('USD', 'EUR', 'PLN'))) { $miejscaPoPrzecinku = 2; } else { $miejscaPoPrzecinku = 8; } ?>
                      <?php if(in_array($symbolWaluty[$item->MarketName], array('USD'))) { $show = ''; } else { $show = number_format($showUsdPrice, 2, '.', '') . ' ' . 'USD'; } ?>
                      
                      <?php echo number_format($item->Last, $miejscaPoPrzecinku, '.', ''); echo ' ' . $symbolWaluty[$item->MarketName]; ?>
                  </p>
                  <p>
                    <?php echo $show ?>
                  </p>
                  <p>
                  <?php echo number_format($showPlnPrice, 2, ',', '') . ' PLN';?>
                  </p>
              </span>
              <div class="text-muted">[ <?php echo $item->MarketName;?> ]</div>
            </div>
             
            <?php endforeach; ?>
          </section>
            
            
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

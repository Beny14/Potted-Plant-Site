  <?php
    include_once('includes/connect.php');
    include_once('header.php');
    include_once('products.php');
  ?>

  <html>
  <div class="container-fluid bg-site">
    <section class="bg-section">
      <div class="row">

        <div class="col-md-7 carousel pb-5">
            <!-- Start Carousel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="bg-success" data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li class="bg-success" data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li class="bg-success" data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/carousel.png" class="d-block " alt="Not working" width="100%;">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h5><strong>Potted Plant</strong></h5>
                    <p>Plante de ghiveci, ideale pentru casa si gradina ta.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/carousel.png" class="d-block " alt="Not working" width="100%;">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h5><strong>Potted Plant</strong></h5>
                    <p>Plante de ghiveci, ideale pentru casa</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/carousel.png" class="d-block " alt="Not working" width="100%;">
                  <div class="carousel-caption d-none d-md-block text-dark">
                    <h5><strong>Potted Plant</strong></h5>
                    <p>Plante de ghiveci, ideale gradina</p>
                  </div>
                </div>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div> <!-- End Carousel -->
        </div> <!-- End col-md-7 -->

        <div class="col-lg-4 col-md-8 reclame mb-5"> <!-- col-lg-4 col-md-8 -->
          <div class="reclame card text-dark shadow mr-5"> <!-- m-4 -->
            <img src="img/plant_1.jpg" class="card-img" width="200px" height="200px" alt="...">
            <div class="card-img-overlay rec">
              <h5 class="card-title"><strong>Latest Plant !</strong></h5>
              <p class="card-text"><small>Season Sale</small></p>
            </div>
          </div>

          <div class="reclame card text-dark shadow rec-2"> <!-- card text-dark shadow m-4 mt-5-->
            <img src="img/plant_2.jpg" class="card-img" width="200px" height="200px" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title"><strong>Plant !</strong></h5>
              <p class="card-text">Season Sale ending.</p>
            </div>
          </div>
        </div> <!-- End col -->
      </div> <!-- End row -->

      <div class="row">
        <div class="col-md-12">
          <img src="img/discount1.png" alt="Not Working" width="100%;" height="100%;">
        </div> <!-- End col-md-12 -->
      </div> <!-- End row -->
    </section>

    <h1 class="text-center pt-5 pb-5">Featured Product</h1>

    <div class="row pb-5 chenar-shop">
      <?php foreach ($plante as $plant){ ?>
        <div class="col">
          <div class="wrapper-shop">
            <div class="container-shop">
              <div class="top"><?php echo '<img src="img/'. $plant['imagine']. '" alt="Not Working" style="width:200px; height:200px;"/>'; ?></div>
              <div class="bottom">
                <div class="left">
                  <div class="details">
                    <h6><?php echo $plant['title']; ?></h6>
                    <p>Pret: <?php echo $plant['pret']; ?> / buc</p>
                  </div>
                  <form class="" action="#" method="POST">
                    <div class="buy"><button type="button" class="cart-submit" name="add-cart"><i class="fas fa-shopping-cart"></i></button></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="inside">
              <div class="icon"><i class="fas fa-info-circle"></i></div>
              <div class="contents">
                <table>
                  <tr>
                    <th><strong>Descriere:</strong></th>
                  </tr>
                  <tr>
                    <td><?php echo $plant['detalii'] ?><br><br></td>
                  </tr>
                  <tr>
                    <th><strong>Bucati:</strong></th>
                  </tr>
                  <tr>
                    <td><?php echo $plant['cantitatea'] ?> de bucati</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php }; ?>
    </div> <!--End row-- >
  </div> <!-- End container-fluid -->

  <?php include_once('footer.php'); ?>
</html>

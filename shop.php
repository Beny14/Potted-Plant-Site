<?php
  include('header.php');
  include('includes/connect.php');
  include('products.php');
?>

  <html>
  <h1 class="text-center pt-5 pb-5">Shop Potted Plant</h1>
    <div class="row chenar-shop">
      <?php foreach ($shopplante as $shopplant){ ?>
        <div class="col">
          <div class="wrapper-shop">

              <div class="container-shop">
                <div class="top"><?php echo '<img src="img/'. $shopplant['imagine']. '" alt="Not Working" style="width:200px; height:200px;"/>'; ?></div>
                <div class="bottom">
                  <div class="left">
                    <div class="details">
                      <h6><?php echo $shopplant['title']; ?></h6>
                      <p>Pret: <?php echo $shopplant['pret']; ?> / buc</p>
                    </div>

                    <form action="#" method="POST">
                      <div class="buy">
                        <input type="hidden" name="product_id" value="">
                        <button type="submit" class="cart-submit"><i class="fas fa-shopping-cart"></i></button>
                      </div>
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
                      <td><?php echo $shopplant['detalii'] ?><br><br></td>
                    </tr>
                    <tr>
                      <th><strong>Bucati:</strong></th>
                    </tr>
                    <tr>
                      <td><?php echo $shopplant['cantitatea'] ?> de bucati</td>
                    </tr>
                  </table>
                </div>
              </div>

          </div>
        </div>
      <?php }; ?>
    </div>
  </html>

<?php
  include('footer.php');
?>

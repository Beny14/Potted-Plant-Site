<?php
  include_once('header.php');
  include_once('includes/message-us.php');
?>

<html>
<head>
	<link rel="stylesheet" href="css/styleContact.css">
</head>
<div class="container-fluid all">
  <div class="row">
    <div class="col-md-6 col-md-4 p-4">
      <img class="img-contact" src="img/plant-contact" alt="Not Working" width="100%" height="100%">
    </div>
    <div class="col-md-6 col-md-4 text-left">
      <h1 class="text-center pt-3 text">Let's go to talk</h1>
      <p class="text-center pb-4">We'd Love to Hear From You</p>
      <div class="row">
        <div class="col-6">
          <h4><strong>Anddress</strong></h4>
          <p>Romania, Prahova, Slanic</p>
            <br>
          <h4><strong>Email</strong></h4>
          <p>info@yahoo.com</p>
        </div>
        <div class="col-6">
          <h4><strong>Phone</strong></h4>
          <p>+04 123 456 789</p>
          <br>
        <h4><strong>Additional Information</strong></h4>
        <p>We are open: Monday-Saturday, 10AM - 8PM, for Sunday it's close.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h4><strong>Social</strong></h4>
          <div class="social">
            <div class="social__item">
              <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
            </div>
            <div class="social__item">
              <span><a href="#"><i class="fab fa-instagram"></i></a></span>
            </div>
            <div class="social__item">
              <span><a href="#"><i class="fab fa-whatsapp"></i></a></span>
            </div>
            <div class="social__item">
              <span><a href="#"><i class="far fa-envelope"></i></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End row -->
  <hr>
  <div class="row">
    <div class="col">
      <h1 class="text-center">Leave us a message</h1>
      <p class="text-center pb-4">-good for nature, good for you-</p>

      <form action="includes/message-us.php" method="POST">
        <div class="form-row">
          <div class="col">
            <input type="text" name="full-name" class="form-control" placeholder="Full name: ">
          </div>
          <div class="col">
            <input type="text" name="email" class="form-control" placeholder="Email: example@yahoo.com">
          </div>
          <div class="col">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number: 0123 456 789">
          </div>
        </div>
        <div class="form-row">
          <textarea class="form-control mt-3" name="message" rows="8" placeholder="Message: "></textarea>
        </div>
        <button type="submit" name="send-message" class="btn btn-outline-success sendMessage">Send Message</button>
      </form>

    </div>
  </div>
</div>

</html>

<?php
  include_once('footer.php');
?>

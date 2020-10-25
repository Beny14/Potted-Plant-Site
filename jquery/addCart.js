$(".product-form").submit(function(e){
  var form_data = $(this).serialize();
  var button_content = $(this).find('button[type=submit]');
$.ajax({
  url: "manage_cart.php",
  type: "POST",
  dataType:"json",
  data: form_data
  }).done(function(data){
    $(".shop-cart").html(data.products);
    button_content.html();
  })
  e.preventDefault();
});

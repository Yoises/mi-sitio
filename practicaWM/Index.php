<!DOCTYPE html>
<html lang="pt_PT">

<head>
	<meta charset="utf-8">
    <title>BE FITNESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

        
        <!--colocar o navebar-->

        <?php include 'includes/nav.php'; ?>

    <!--slider-->
<br>

<div class="container linha">
<div class="container slider">

    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/interaccion1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>let's have a session</h5>
        <p>meet all our personal trainer and enjoy sharing time with us</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/interaccion2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>offers</h5>
        <p>we have a bunch of offers for you, don't hasite to ask for information</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/interaccion3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>be healthy</h5>
        <p>have a healhty body means having a balance in your feeding</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
    
<br>
   
    <div class="container">
        <div class="row box1">
            <div class="col-md-3 col-12 order-first imgbox1">
                <img src="assets/images/box1.jpg" width="400" height="250">
            </div>
            <div class="col-md-9 col-12 order-last">
                <h2 class="text-center texbox1">Do you want to start your training but,<br>you don’t know how?</h2>
                <p class="text-center">know the first items to have a training habit, <br>what you should know before starting; the first exercises to start; <br>how to put together your training routine based on your goals; and many other things.</p>
            </div>
        </div>
   </div>
<br>
    <div class="container">
        <div class="row box2">
            <div class="col-md-3 col-12 order-last imgbox2">
                <img src="assets/images/box2.jpg" width="400" height="250">
            </div>
            <div class="col-md-9 col-12 order-first">
                <h2 class="text-center texbox2">Discover the services we have for you</h2>
                <p class="text-center">Know our serivicios and promotions are adapted to your obejtivos,<br>so you have an excellent experience with us and in the same way you can reach the body you want taking care of your health <br> <br>The best attention guarantees.</p>
            </div>
        </div>
   </div>
<br>
    <div class="container">
        <div class="row box3">
            <div class="col-md-3 col-12 order-first imgbox3">
                <img src="assets/images/box3.jpg" width="400" height="250">
            </div>
            <div class="col-md-9 col-12 order-last">
                <h2 class="text-center texbox3">What foods are necessary for my training?</h2>
                <p class="text-center">Depending on the objective in your training, will vary the type of feeding that you should eat, <br>always taking into account that a good feeding, will guarantee a better response of our body.<br><br> Find out more about information like these by going to our Blog.</p>
            </div>
        </div>
   </div>
<br>


    <?php include 'includes/prefooter.php'; ?>

    <?php include 'includes/footer.php'; ?>

    </script>
</body>

</html>
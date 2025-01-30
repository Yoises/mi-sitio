<!DOCTYPE html>
<html lang="pt_PT">

<head>
	<meta charset="utf-8">
    <title>Clubs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>

        
        <!--colocar o navebar-->
        <?php include '../includes/nav.php'; ?>

    <!--slider-->
<br>
<br>
<br>
<br>
   <div class="container">
        <div class="row">
            <img src="../assets/images/EVERYWHERE.png">
        </div>
    </div>
    <div class="container ">
            
            <div class="row">             
                 <div class="col-auto mx-auto text-black fw-bold text-xl-center">
                    <h1>Know our Clubs</h1>
                </div>
           </div>
            
        </div>
    <div class="container">
        <div class="row box1">
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym1.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 1 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym2.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 2 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
           <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym3.png" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 3 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
        </div>
   </div>
<br>
    <div class="container ">
        <div class="row box1">
           <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym4.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 4 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym5.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 5 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym6.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 6 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
        </div>
   </div>
<br>
    <div class="container">
        <div class="row box1">
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym7.png" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 7 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
           <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym8.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 8 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
            <div class="wrapper clearfix col-md-4 col-12 t1 imgbox1">
                <figure class="gallery-item1">
                    <img src="../assets/images/gym9.jpg" width="400" height="250" alt='image'>
                    <figcaption class="img-title1">
                        <h5>Club 9 <br> Sector</h5>
                    </figcaption>
                </figure>
            </div>
        </div>
   </div>
<br>

    
    <?php include '../includes/prefooter.php'; ?>


    <?php include '../includes/footer.php'; ?>


   <script type="text/javascript">

    $(document).ready(function() {

  $('.gallery-item1').hover(function() {
    $(this).find('.img-title1').fadeIn(300);
  }, function() {
    $(this).find('.img-title1').fadeOut(100);
  });

});
    </script>

</body>

</html>
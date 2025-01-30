<!DOCTYPE html>
<html lang="pt_PT">

<head>
	<meta charset="utf-8">
    <title>BE FITNESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/dashboard/practicaWM/assets/css/styles.css">
</head>

<body>



<nav class="navbar navbar-expand-lg container-fluid fixed-top "> <!--fixed-top para fijar la barra-->
            <div class="container-fluid">
                <a class="navbar-brand" href="/dashboard/practicaWM/Index.php"><img src="/dashboard/practicaWM/assets/images/logo.png" alt="Bootstrap" width="200" height="70"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="bari collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active altura" aria-current="page" href="/dashboard/practicaWM/Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link altura" aria-current="page" href="/dashboard/practicaWM/pages/About-us.php">About us</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle altura" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard/practicaWM/pages/Trainers.php">Personal Coach</a></li>
                        <li><a class="dropdown-item" href="/dashboard/practicaWM/pages/Clubs.php">Clubs</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Workout equipements</a></li>
                        <li><a class="dropdown-item" href="#">Food counseling</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link altura" href="#" >Blogs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link altura" href="/dashboard/practicaWM/pages/Contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><img src="/dashboard/practicaWM/assets/images/search.svg"></img></button>
                </form>
                    <div id="containbtn">
                        <button class="buttonli btn"></button>
                    </div>
                </div>
            </div>
            </nav>
            


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

  $('.gallery-item').hover(function() {
    $(this).find('.img-title').fadeIn(300);
  }, function() {
    $(this).find('.img-title').fadeOut(100);
  });

});
    </script>
    </body>
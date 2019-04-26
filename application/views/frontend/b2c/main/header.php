<!-- <div class="video"> -->


<head>
  <meta charset="UTF-8" />
  <title>Bliho.</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/css/style.css" />
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/css/category.css" />
  <link rel="stylesheet" href="<?=base_url()?>/assets/css/css/payment.css" />

  <script src="<?=base_url()?>/assets/js/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<nav id="navbar" class="navbar navbar-default navbar-expand-lg navbar-light">
    <a class="navbar-brand brand-text" href="index.html"><img src="images/temp/logo.png" /></a>
    <div class="searchContainer">
        <i class="fa fa-search searchIcon"></i>
        <input class="searchBox" type="search" name="search" placeholder="Search" />
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item nav-button">
                <a class="nav-link nav-button-text" href="/preview.html">About</a>
            </li>
            <li class="nav-item nav-button">
                <a class="nav-link nav-button-text" href="#">License</a>
            </li>
            <li class="nav-item nav-button">
                <a class="nav-link nav-button-text" href="<?= base_url() ?>application/views/payment.php">Pricing</a>
            </li>
            <li class="nav-item nav-button">
                <a class="nav-link nav-button-text" href="signup.html">Create Account</a>
            </li>
            <li class="nav-item nav-button">
                <a href="signin.html" class="btn sign-in sign-in-text my-2 my-sm-0" style="width:100px;">
                    Sign In
                    <i class="fas fa-sign-in-alt" style="margin-left:15%;"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
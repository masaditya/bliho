<html>

<head>
  <title>Bliho.</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="video-full">
    <nav id="navbar" class="navbar navbar-default navbar-expand-lg navbar-light">
      <a class="navbar-brand brand-text" href="index.html"><img src="images/logo.png" /></a>
      <div class="searchContainer">
        <i class="fa fa-search searchIcon"></i>
        <input class="searchBox" type="search" name="search" placeholder="Search">
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
          <li class="nav-item nav-button">
            <a class="nav-link nav-button-text" href="#">About</a>
          </li>
          <li class="nav-item nav-button">
            <a class="nav-link nav-button-text" href="#">License</a>
          </li>
          <li class="nav-item nav-button">
            <a class="nav-link nav-button-text" href="#">Pricing</a>
          </li>
          <li class="nav-item nav-button">
            <a class="nav-link nav-button-text" href="#">Create Account</a>
          </li>
          <li class="nav-item nav-button">
            <button class="btn sign-in sign-in-text my-2 my-sm-0" style="width:100px;">Sign In <i class="fas fa-sign-in-alt"
                style="margin-left:15%;"></i></button>
          </li>
        </ul>
      </div>
    </nav>
    <div id="categories" class="container-fluid content">
      <div id="first">
        <div class="first-inside row">
          <div class="col col-md-12">
            <p id="item-total" class="inline">7,325</p>
            <p class="inline">Illustrations</p>
            <p>Vector Illustration, Digital Painting, Pop Art, Old School, etc.</p>
          </div>
        </div>
      </div>
      <div id="second">
        <div class="second-inside row">
          <div class="col col-md-6">
            <form action="categories.html">
              <button class="btn" type="submit" value="Go to Google">+Show Filter</button>
            </form>
          </div>
          <div class="col col-md-6">

                  
            <select class="filter-select">
              <option value="1">Short By Popular&#160;&#160;</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select> 
           

            <div id="cat-filter" class=" dropdown">
              <!-- <button class="filter-select btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button> -->
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="third">
        <div class="row">
          <div class="col col-md-12">
            <p>All Items Illustration Templates</p>
          </div>
        </div>
      </div>
      <div id="items">
        <div class="item-row row">
          <div class="col col-md-4">
            <div class="card" style="width: 100%; border-radius: 5%;">
              <img class="card-img-top" src="images/1.png" alt="Card image cap">
              <div class="card-body">
                <div class="row">
                  <div class="item col col-md-7 ">
                    <p class="item-name">Illustration Name - Vector</p>
                    <p class="item-author">by Author Name</p>
                  </div>
                  <div class="item col col-md-3">
                    <p class="item-type-name">Ai,PNG</p>

                  </div>
                  <div class="item download" class="col col-md-2">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-4">
            <div class="card" style="width: 100%; border-radius: 5%;">
              <img class="card-img-top" src="images/2.png" alt="Card image cap">
              <div class="card-body">
                <div class="row">
                  <div class="item col col-md-7 ">
                    <p class="item-name">Illustration Name - Vector</p>
                    <p class="item-author">by Author Name</p>
                  </div>
                  <div class="item col col-md-3">
                    <p class="item-type-name">Ai,PNG</p>

                  </div>
                  <div class="item download" class="col col-md-2">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-4">
            <div class="card" style="width: 100%; border-radius: 5%;">
              <img class="card-img-top" src="images/3.png" alt="Card image cap">
              <div class="card-body">
                <div class="row">
                  <div class="item col col-md-7 ">
                    <p class="item-name">Illustration Name - Vector</p>
                    <p class="item-author">by Author Name</p>
                  </div>
                  <div class="item col col-md-3">
                    <p class="item-type-name">Ai,PNG</p>

                  </div>
                  <div class="item download" class="col col-md-2">
                    <i class="fas fa-arrow-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item-row row">
          <div class="col col-md-4">
            <div class="card" style="width: 100%; border-radius: 5%;">
              <img class="card-img-top" src="images/1.png" alt="Card image cap">
              <div class="card-body">
                <div class="row">
                  <div class="item col col-md-7 ">
                    <p class="item-name">Illustration Name - Vector</p>
                    <p class="item-author">by Author Name</p>
                  </div>
                  <div class="item col col-md-3">
                    <p class="item-type-name">Ai,PNG</p>

                  </div>
                  <div class="item download" class="col col-md-2">
                    <i class="fas fa-arrow-down"></i>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-4">
            <div class="card" style="width: 100%; border-radius: 5%;">
              <img class="card-img-top" src="images/2.png" alt="Card image cap">
              <div class="card-body">
                <div class="row">
                  <div class="item col col-md-7 ">
                    <p class="item-name">Illustration Name - Vector</p>
                    <p class="item-author">by Author Name</p>
                  </div>
                  <div class="item col col-md-3">
                    <p class="item-type-name">Ai,PNG</p>

                  </div>
                  <div class="item download" class="col col-md-2">
                    <i class="fas fa-arrow-down"></i>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-md-4">
            <a href="#">
              <div class="card" style="width: 100%; border-radius: 5%;">
                <img class="card-img-top" src="images/3.png" alt="Card image cap">
                <div class="card-body">
                  <div class="row">
                    <div class="item col col-md-7 ">
                      <p class="item-name">Illustration Name - Vector</p>
                      <a href="google.com">
                        <p class="item-author">by Author Name</p>
                      </a>
                    </div>
                    <div class="item col col-md-3">
                      <p class="item-type-name">Ai,PNG</p>

                    </div>
                    <div class="item download" class="col col-md-2">
                      <i class="fas fa-arrow-down"></i>

                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div id="pagination">
        <center>
          <a href="#">&laquo;</a>
          <a href="#">1</a>
          <a href="#" class="active">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <a href="#">6</a>
          <a href="#">&raquo;</a>
        </center>
      </div>

    </div>
    <footer class="footer">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <!-- Contact -->
          <div class="col-md-2 mt-md-0 mt-3">

            <h5 class="text-uppercase">Contact Us</h5>
            <ul class="list-unstyled mf-t">
              <li>
                <a>+62 345 6789 0123</a>
              </li>
              <li>
                <a>admin@bliho.com</a>
              </li>
              <li>
                <a href="#">Find a Store</a>
              </li>
            </ul>

          </div>
          <!-- Contact -->
          <!-- Pembatas -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Pembatas -->
          <!-- costumer -->
          <div class="col-md-2 mt-md-0 mt-3">

            <h5 class="text-uppercase">Costumer service</h5>
            <ul class="list-unstyled mf-t">
              <li>
                <a href="#">Contact Us</a>
              </li>
              <li>
                <a href="#">Ordering & Payments</a>
              </li>
              <li>
                <a href="#">Shipping</a>
              </li>
              <li>
                <a href="#">Returns</a>
              </li>
              <li>
                <a href="#">FAQ</a>
              </li>
            </ul>
          </div>
          <!-- costumer -->
          <!-- Pembatas -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Pembatas -->
          <!-- information -->
          <div class="col-md-2 mt-md-0 mt-3">
            <h5 class="text-uppercase">Information</h5>
            <ul class="list-unstyled mf-t">
              <li>
                <a href="#">About Bliho</a>
              </li>
              <li>
                <a href="#">Work With Us</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
              <li>
                <a href="#">Terms & Conditions</a>
              </li>
              <li>
                <a href="#">Press Enquiries</a>
              </li>
            </ul>
          </div>
          <!-- information -->
          <!-- Pembatas -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Pembatas -->
          <!-- mail -->
          <div class="col-md-3 mt-md-0 mt-3">
            <h5>Subscribe to Bliho Via Email</h5>
            <ul class="list-unstyled mf-t">
              <li>
                <a>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</a>
              </li>
              <li>
                <div class="form-group">
                  <div class="row mt-2">
                    <div class="col-md-7">
                      <input type="email" class="form-control input-email" id="usr" placeholder="Email Address">
                      <input type="email" class="form-control input-email" id="type" placeholder="Email Address">
                    </div>
                    <div class="col-md-5">
                      <button class="btn ml-3 subscribe-btn">
                        SUBSCRIBE
                      </button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- mail -->

        </div>
      </div>
    </footer>

  </div>



  <script>
    window.onscroll = function () {
      scrollFunction()
    };
    var x = $('#navbar');

    function scrollFunction() {
      if (document.documentElement.scrollTop > 50 || document.body.scrollTop > 50) {
        document.getElementById("navbar").style.top = "0";
        $('nav').removeClass('navbar-default');
        $('nav').addClass('navbar-scroll');

      } else {
        console.log(document.documentElement.scrollTop)
        $('nav').removeClass('navbar-scroll');
        $('nav').addClass('navbar-default');

      }
    }

    $('#type').keyup(function () {
      $('#usr').val($(this).val() + ' example');
    });
  </script>
</body>

</html>
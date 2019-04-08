<html>

<head>
  <meta charset="UTF-8" />
  <title>Bliho.</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/category.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
  <div class="video">
    <nav id="navbar" class="navbar navbar-default navbar-expand-lg navbar-light">
      <a class="navbar-brand brand-text" href="#"><img src="<?=base_url()?>assets/images/logo.png" /></a>
      <div class="searchContainer">
        <i class="fa fa-search searchIcon"></i>
        <input class="searchBox" type="search" name="search" placeholder="Search" />
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
            <button class="btn sign-in sign-in-text my-2 my-sm-0" style="width:100px;">
              Sign In
              <i class="fas fa-sign-in-alt" style="margin-left:15%;"></i>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid content">
      <div class="row top-padding">
        <div class="col col-md-6 upper-left">
          <div class="row category ">
            <div class="col-md-auto ">
              <div class="category-icon ">
                <div class="container">
                  <img id="cat-1" key="1" class="category-icon-item selected" id="category-icon-1" src="<?=base_url()?>assets/images/icon1.jpg" />
                  <img id="cat-2" key="3" class="category-icon-item" id="category-icon-3" src="<?=base_url()?>assets/images/icon3.jpg" />
                  <img id="cat-3" key="2" class="category-icon-item" id="category-icon-2" src="<?=base_url()?>assets/images/icon2.jpg" />
                  <img id="cat-4" key="4" class="category-icon-item" id="category-icon-4" src="<?=base_url()?>assets/images/icon4.jpg" />
                  <img id="cat-5" key="5" class="category-icon-item" id="category-icon-5" src="<?=base_url()?>assets/images/icon5.jpg" />
                </div>
              </div>

            </div>
            <div class="col-md-6 " style="padding-top:25%;">
              <ul class="category-list">
                <li>
                  <a key="1" class="category-list-item" href="#">Training Manual</a>
                </li>
                <li>
                  <a key="2" class="category-list-item" href="#">Musics</a>
                </li>
                <li>
                  <a key="3" class="category-list-item" href="#">Illustration</a>
                </li>
                <li>
                  <a key="4" class="category-list-item" href="#">Templates</a>
                </li>
                <li>
                  <a key="5" class="category-list-item" href="#">Stock Images</a>
                </li>
              </ul>
              <form action="categories.html">
                <button class="btn" type="submit" value="Go to Google">
                  Browse All Category
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col col-md-6 upper-right">
          <img src="<?=base_url()?>assets/images/upper-right.png" />
          <h2 class="upper-right-h2">Illustration</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div style="height:100%;">
    <div class="row">
      <div class="col col-md-5 second-upper-left">
        <div class="second-upper-left-inside">
          <h2 class="upper-right-h2">999,999+ top</h2>
          <h2 class="upper-right-h2">quality assets</h2>
          <p>
            All the creative assets you need <br />
            under one subscription.
          </p>
          <button class="btn">Get Started</button>
        </div>
      </div>
      <div class="col col-md-1">
        hello
      </div>
      <div class="col col-md-6">
        <div class="second-upper-right">
          <div id="first-img">
            <img class="second-upper-right-img2" src="<?=base_url()?>assets/images/second-upper-right.png" />
            <img class="second-upper-right-img1" src="<?=base_url()?>assets/images/second-upper-right.png" />
          </div>
          <div id="second-img">
            <img class="second-upper-right-img0" src="<?=base_url()?>assets/images/second-upper-right.png" />
          </div>
          <div id="third-img">
            <img class="second-upper-right-img2-bottom" src="<?=base_url()?>assets/images/second-upper-right.png" />
            <img class="second-upper-right-img1-bottom" src="<?=base_url()?>assets/images/second-upper-right.png" />
          </div>

          <!-- <img class="second-upper-right-img0" src="images/second-upper-right.png"> -->

          <!-- <img class="second-upper-right-img2-bottom" src="images/second-upper-right.png"> -->
          <!-- <img class="second-upper-right-img1-bottom" src="images/second-upper-right.png"> -->
        </div>
      </div>
    </div>
  </div>
  <div class="video" style="height:100%;">
    <div class="third-upper">
      <center>
        <div class="third-upper-inside">
          <h2>
            Become <br />
            an Author
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut
          </p>
          <button class="btn">Get Started</button>
        </div>
      </center>
    </div>
  </div>
  <div style="height:100%;">
    <div class="row">
      <div class="col col-md-6">
        <div class="fourth-upper ">
          <div class="fourth-upper-left">
            <img class="fourth-upper-left-images" src="<?=base_url()?>assets/images/fourth-upper-left.png" />
          </div>
        </div>
      </div>
      <div class="col col-md-6">
        <div class="fourth-upper fourth-upper-right">
          <p>Unlimited downloads of 999,999+ creative assets</p>
          <h2>Subscribe now and start creating</h2>
          <button class="btn">Bring Me to The Premium Content</button>
        </div>
      </div>
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
        <hr class="clearfix w-100 d-md-none pb-3" />
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
        <hr class="clearfix w-100 d-md-none pb-3" />
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
        <hr class="clearfix w-100 d-md-none pb-3" />
        <!-- Pembatas -->
        <!-- mail -->
        <div class="col-md-3 mt-md-0 mt-3">
          <h5>Subscribe to Bliho Via Email</h5>
          <ul class="list-unstyled mf-t">
            <li>
              <a>Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia</a>
            </li>
            <li>
              <div class="form-group">
                <div class="row mt-2">
                  <div class="col-md-7">
                    <input type="email" class="form-control input-email" id="usr" placeholder="Email Address" />
                    <input type="email" class="form-control input-email" id="type" placeholder="Email Address" />
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

  <script src="<?=base_url()?>assets/js/anime.min.js"></script>

  <script>
    window.onscroll = function () {
      scrollFunction();
    };
    var x = $("#navbar");

    function scrollFunction() {
      if (
        document.documentElement.scrollTop > 1000 ||
        document.body.scrollTop > 700
      ) {
        document.getElementById("navbar").style.top = "0";
        $("nav").removeClass("navbar-default");
        $("nav").addClass("navbar-scroll");
      } else {
        console.log(document.documentElement.scrollTop);
        $("nav").removeClass("navbar-scroll");
        $("nav").addClass("navbar-default");
        
      }
    }

    $("#type").keyup(function () {
      $("#usr").val($(this).val() + " example");
    });
  </script>

  <!-- Category -->
  <script>
    let cat1 = anime({
      targets: "#cat-1",
      translateX: "0px",
      translateY: "0px",
      scale: 2.4,
      borderRadius: "50%",
    });

    let cat2 = anime({
      targets: "#cat-2",
      translateX: "-70px",
      translateY: "-190px",
      borderRadius: "15%",
      filter: "grayscale(10100%)"
    });

    let cat3 = anime({
      targets: "#cat-3",
      translateX: "70px",
      translateY: "-190px",
      borderRadius: "15%",
      filter: "grayscale(100%)"
    });

    let cat4 = anime({
      targets: "#cat-4",
      translateX: "70px",
      translateY: "190px",
      borderRadius: "15%",
      filter: "grayscale(100%)"
    });

    let cat5 = anime({
      targets: "#cat-5",
      translateX: "-70px",
      translateY: "190px",
      borderRadius: "15%",
      filter: "grayscale(100%)"
    });

    let position = [{
        icon: 1,
        xpos: 0,
        ypos: 0
      },
      {
        icon: 2,
        xpos: -70,
        ypos: -190
      },
      {
        icon: 3,
        xpos: 70,
        ypos: -190
      },
      {
        icon: 4,
        xpos: 70,
        ypos: 190
      },
      {
        icon: 5,
        xpos: -70,
        ypos: 190
      },
    ]
    let animList = 1;
    let animListTemp = 1;

    var buttonEl = document.querySelectorAll(".category-list-item");
    var buttonOl = document.querySelectorAll(".category-icon-item");

    async function animateButton(el, scale, duration, elasticity, translateX, translateY, borderRadius, easing, filter) {
      await anime.remove(el);
      anime({
        targets: el,
        opacity: [1, 0.75, 1],
        scale: scale,
        duration: duration,
        elasticity: elasticity,
        translateX: translateX,
        translateY: translateY,
        borderRadius: borderRadius,
        easing: easing,
        filter: filter
      }).finished;
    }

    function enterButton(el) {
      animListTemp = animList;
      animList = el.getAttribute("key");
     

      var hei = $(".upper-right-h2").html();
      console.log(hei);
      $("h2.upper-right-h2").text(el.text);
      


      // for (let i = 0; i < position.length; i++) {
      //   if (animList == position[i].icon) {
      //     position[i].xpos
      //     position[i].xpos = position[animListTemp].xpos;
      //     position[i].ypos = position[animListTemp].ypos;
      //   }
      // }

   

      if (animListTemp != animList) {

        animateButton(
          buttonOl[animList - 1], 2.4, 250, 0, 0, 0, "50%", "easeInOutExpo", "grayscale(0%)"
        );

        

        animateButton(buttonOl[animListTemp - 1], 1.0, 250, 1000, (position[animList - 1].xpos + "px"),
          (position[animList - 1].ypos + "px"), "15%",
          "easeInOutExpo",
          "grayscale(100%)");

        position[animListTemp - 1].xpos = position[animList - 1].xpos;
        position[animListTemp - 1].ypos = position[animList - 1].ypos;
      }


    }

    // function leaveButton(animListTemp) {
    // let animList = el.getAttribute("key");
    // console.log(animListTemp);


    // let translateX = 0;
    // let translateY = 0;

    // for (let i = 0; i < position.length; i++) {
    //   if (animListTemp == position[i].icon) {
    //     translateX = position[i].xpos;
    //     translateY = position[i].ypos;
    //   }
    // }

    // animateButton(buttonOl[animList - 1], 1.0, 20, 1000, (translateX + "px"), (translateY + "px"), "15%",
    //   "spring(0.5, 100, 7, 0)",
    //   "grayscale(100%)");

    // }

    for (var i = 0; i < buttonEl.length; i++) {
      buttonEl[i].addEventListener(
        "mouseenter",
        function (e) {
          enterButton(e.target);
        },
        false
      );

      // buttonEl[i].addEventListener(
      //   "mouseleave",
      //   function (e) {
      //     leaveButton(e.target);
      //   },
      //   false
      // );
    }
  </script>
</body>

</html>
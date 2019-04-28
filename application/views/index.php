<body>
  <div class="video">
    <div class="container-fluid content">
      <div class="row top-padding">
        <div class="col col-md-6 upper-left">
          <div class="row category ">
            <div class="col-md-auto">
              <div class="category-icon">
                <div class="container">
                  <img src="<?=base_url()?>/assets/images/selector.png" id="selector" />
                  <img id="cat-1" key="1" class="category-icon-item" id="category-icon-1"
                    src="<?=base_url()?>/assets/images/Group 10682@3x.png" />
                  <img id="cat-2" key="3" class="category-icon-item" id="category-icon-3"
                    src="<?=base_url()?>/assets/images/Group 10683@3x.png" />
                  <img id="cat-3" key="2" class="category-icon-item" id="category-icon-2"
                    src="<?=base_url()?>/assets/images/Group 10681@3x.png" />
                  <img id="cat-4" key="4" class="category-icon-item" id="category-icon-4"
                    src="<?=base_url()?>/assets/images/Group 10692@3x.png" />
                  <img id="cat-5" key="5" class="category-icon-item" id="category-icon-5"
                    src="<?=base_url()?>/assets/images/Group 10684@3x.png" />
                </div>
              </div>
            </div>
            <div class="col-md-6 ">
              <ul class="category-list">
                <li>
                  <a key="1" value="Training Manual" class="category-list-item"
                    href="pages/trainingManual/catalogTM.html">Training
                    Manual</a>
                </li>
                <li>
                  <a key="2" value="Music" class="category-list-item" href="/pages/music/catalogMusic.html">Music</a>
                </li>
                <li>
                  <a key="3" value="Illustrations" class="category-list-item" href="categories.html">Illustrations</a>
                </li>
                <li>
                  <a key="4" value="Templates" class="category-list-item"
                    href="<?=base_url() ?>index.php/templates">Ts</a>
                </li>
                <li>
                  <a key="5" value="Stock Images" class="category-list-item"
                    href=" <?=base_url() ?> index.php/templates">Stock Images</a>
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
          <div class="image-full">
            <img id="fullsize" src="<?=base_url()?>/assets/images/Group 10988@3x.png" />
          </div>
          <h2 id="desc-title" class="upper-right-h2">Illustration</h2>
          <p id="description">
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
    <div class="row second-container">
      <div class="col-md-5 second-upper-left">
        <div class="second-upper-left-inside">
          <h2 class="upper-right-h2">999,999+ top</h2>
          <h2 class="upper-right-h2">quality assets</h2>
          <p class="">
            All the creative assets you need <br />
            under one subscription.
          </p>
          <button class="get-started-btn">Get Started</button>
        </div>
      </div>
      <div class="col-md-1"></div>

      <div class="col-md-6 second-upper-right">

        <img keys="1" id="icon-1" class="icon-images" src="<?=base_url()?>/assets/images/temp/1.png" />
        <img keys="2" id="icon-2" class="icon-images" src="<?=base_url()?>/assets/images/temp/2.png" />
        <img keys="3" id="icon-3" class="icon-images" src="<?=base_url()?>/assets/images/temp/3.png" />
        <img keys="4" id="icon-4" class="icon-images" src="<?=base_url()?>/assets/images/temp/2.png" />
        <img keys="5" id="icon-5" class="icon-images" src="<?=base_url()?>/assets/images/temp/3.png" />
      </div>
    </div>
  </div>
  <div class="video" style="height:100%; background-image: linear-gradient(to top, #3d464d, #666666);">
    <div class="row">
      <div class="col-md-7 ">
        <img class="third-left-row" src="<?=base_url()?>/assets/images/Group 10819@3x.png" />
      </div>
      <div class="col-md-5">
        <div class="third-right-row">
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
      </div>
    </div>

  </div>
  <div style="height:100%;">
    <div class="row">
      <div class="col col-md-5">
        <div class="fourth-upper ">
          <div class="fourth-upper-left">
            <img class="fourth-upper-left-images" src="<?=base_url()?>/assets/images/Group 10990@3x.png" />
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col col-md-6">
        <div class="fourth-upper fourth-upper-right">
          <p>Unlimited downloads of 999,999+ creative assets</p>
          <h2>
            Subscribe now and <br />
            start creating
          </h2>
          <button class="btn">Bring Me to The Premium Content</button>
        </div>
      </div>
    </div>
  </div>
  <div data-include="footer"></div>
  <?php include 'frontend/b2c/main/footer.php'; ?>



  <script src="<?=base_url()?>/assets/js/anime.min.js"></script>

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
    let icon1 = anime({
      targets: "#icon-1",
      translateX: "0px",
      translateY: "0px",
      scale: 2,
      borderRadius: "20%"
    });

    let icon2 = anime({
      targets: "#icon-2",
      translateX: "-150px",
      translateY: "-270px",
      scale: 0.7,
      borderRadius: "20%"
    });

    let icon3 = anime({
      targets: "#icon-3",
      translateX: "-270px",
      translateY: "-180px",
      scale: 1,
      borderRadius: "20%"
    });

    let icon4 = anime({
      targets: "#icon-4",
      translateX: "200px",
      translateY: "230px",
      scale: 1,
      borderRadius: "20%"
    });
    let icon5 = anime({
      targets: "#icon-5",
      translateX: "50px",
      translateY: "180px",
      scale: 0.8,
      borderRadius: "20%"
    });




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
      translateY: "-220px",
      borderRadius: "50%",
      filter: "grayscale(100%)"
    });
    let cat3 = anime({
      targets: "#cat-3",
      translateX: "120px",
      translateY: "-170px",
      borderRadius: "50%",
      filter: "grayscale(100%)"
    });
    let cat4 = anime({
      targets: "#cat-4",
      translateX: "90px",
      translateY: "220px",
      borderRadius: "50%",
      filter: "grayscale(100%)"
    });
    let cat5 = anime({
      targets: "#cat-5",
      translateX: "-120px",
      translateY: "170px",
      borderRadius: "50%",
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
        ypos: -220
      },
      {
        icon: 3,
        xpos: 120,
        ypos: -170
      },
      {
        icon: 4,
        xpos: 90,
        ypos: 220
      },
      {
        icon: 5,
        xpos: -120,
        ypos: 170
      },
    ]

    let posIcon = [{
        icon: 1,
        xpos: 0,
        ypos: 0,
        scale: 1.4
      },
      {
        icon: 2,
        xpos: -150,
        ypos: -270,
        scale: 0.7
      },
      {
        icon: 3,
        xpos: -270,
        ypos: -180,
        scale: 1
      },
      {
        icon: 4,
        xpos: 200,
        ypos: 140,
        scale: 1
      },
      {
        icon: 5,
        xpos: 120,
        ypos: 180,
        scale: 0.8
      }
    ];


    let selectorPos = [-50, -25, 0, 25, 50];

    let xpostrans = [0, 0, 0, 25, -150];
    let ypostrans = [0, 0, 50, 25, 50];



    let animIcon = 1;
    let animIconTemp = 1;


    let animList = 1;
    let animListTemp = 1;
    var categoryList = document.querySelectorAll(".category-list-item");
    var categoryIcon = document.querySelectorAll(".category-icon-item");

    let animText;


    var icons = document.querySelectorAll(".icon-images");

    const animateCategoryIcon = (
      el,
      scale,
      duration,
      elasticity,
      translateX,
      translateY,
      borderRadius,
      easing,
      filter
    ) => {
      anime.remove(el);
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
      });
    };


    for (let i = 0; i < icons.length; i++) {
      icons[i].addEventListener(
        "mouseenter",
        function (e) {
          enterIconsList(e.target);
        },
        false
      );
    }

    enterIconsList = el => {
      animIconTemp = animIcon;
      animIcon = el.getAttribute("keys");
      console.log("icon terdahulu terpilih = " + animIconTemp);

      console.log("anim icon terpilih = " + animIcon);

      if (animIconTemp != animIcon) {
        animateCategoryIcon(
          icons[animIcon - 1],
          1.3,
          250,
          0,
          (posIcon[animIcon - 1].xpos + xpostrans[animIcon - 1]) + "px",
          (posIcon[animIcon - 1].ypos + ypostrans[animIcon - 1]) + "px",
          "20%",
          "easeInOutExpo",
          "grayscale(0%)"
        );

        animateCategoryIcon(
          icons[animIconTemp - 1],
          posIcon[animIconTemp - 1].scale,
          250,
          100,
          posIcon[animIconTemp - 1].xpos + "px",
          posIcon[animIconTemp - 1].ypos + "px",
          "20%",
          "easeInOutExpo",
          "grayscale(0%)"
        );

        // posIcon[animIconTemp - 1].xpos = posIcon[animIcon - 1].xpos;
        // posIcon[animIconTemp - 1].ypos = posIcon[animIcon - 1].ypos;
        // posIcon[animIconTemp - 1].scale = posIcon[animIcon - 1].scale;

      }
    };

    const enterCategoryList = el => {
      animListTemp = animList;
      animList = el.getAttribute("key");
      animText = el.getAttribute("value");
      console.log(el);
      $(categoryList[animListTemp - 1]).removeClass('selected');

      $(el).addClass('selected');
      // $(categoryList[animList - 1]).addClass('selected');

      console.log(el);

      $("#selector").css(
        "transform",
        "translate(0px," + selectorPos[animList - 1] + "px)"
      );

      $("#desc-title").html(animText);

      if (animListTemp != animList) {
        animateCategoryIcon(
          categoryIcon[animList - 1],
          2.4,
          250,
          0,
          0,
          0,
          "50%",
          "easeInOutExpo",
          "grayscale(0%)"
        );

        animateCategoryIcon(
          categoryIcon[animListTemp - 1],
          1.0,
          250,
          1000,
          position[animList - 1].xpos + "px",
          position[animList - 1].ypos + "px",
          "50%",
          "easeInOutExpo",
          "grayscale(100%)"
        );

        var src = ["images/Group 10988@3x.png", "images/Group 10987@4x.png", "images/Group 10986@3x.png",
          "images/Group 10990@2x.png", "images/Group 10989@3x.png"
        ]
        $("#fullsize").attr("src", "<?=base_url()?>/assets/"+src[animList - 1]);

        position[animListTemp - 1].xpos = position[animList - 1].xpos;
        position[animListTemp - 1].ypos = position[animList - 1].ypos;
      }
    };


    for (var i = 0; i < categoryList.length; i++) {
      categoryList[i].addEventListener(
        "mouseenter",
        function (e) {
          enterCategoryList(e.target);
        },
        false
      );
    }
  </script>
</body>

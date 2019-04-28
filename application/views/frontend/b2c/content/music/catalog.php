<html>
  <head>
    <title>Bliho.</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href=" <?=base_url()?>assets/css/css/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/category.css" />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/music.css" />
  </head>

  <body>
    <div class="video">
      <div id="categories" class="container-fluid content">
        <div id="first">
          <div class="first-inside row">
            <div class="col col-md-12">
              <p id="item-total" class="inline">7,325</p>
              <p class="inline">Illustrations</p>
              <p>
                Vector Illustration, Digital Painting, Pop Art, Old School, etc.
              </p>
            </div>
          </div>
        </div>
        <div id="second-col">
          <div class="row">
            <div class="col col-md-6">
              <button id="show-filter" class="btnfilter">
                <span id="symbol" class="fas fa-minus"></span> Show Filter
              </button>
            </div>
            <div class="col col-md-6 right">
              <div class="dropdown">
                <button class="btn dd-tgl" type="button" data-toggle="dropdown">
                  Sort By Popular <span class="fas fa-angle-down"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                </ul>
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
          <div class="row">
            <div id="filter-row" class="col-lg-2">
              <div class="filter-product">
                <li id="title"><strong> Products </strong></li>
                <hr />
                <li id="dropdown-departement" class="dropdown">
                  Departement <span class="fas fa-angle-down"></span>
                </li>
                <div id="filter-cb" class="filter-checkbox">
                  <form class="form-filter">
                    <div class="form-group">
                      <input type="checkbox" id="html" />
                      <label for="html">Front Office</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="css" />
                      <label for="css">House Keeping</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="javascript" />
                      <label for="javascript">Food and Beverages</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="javascript" />
                      <label for="javascript">Public Area</label>
                    </div>
                  </form>
                </div>
                <li>Unit Competency</li>
                <li>Element</li>
                <li>Cluster</li>
                <li>Scheme</li>
                <li id="title"><strong> Price </strong></li>
                <hr />
                <li id="dropdown-premium" class="dropdown">
                  Premium <span class="fas fa-angle-down"></span>
                </li>
                <div id="filter-premium-cb" class="filter-checkbox">
                  <form class="form-filter">
                    <div class="form-group">
                      <input type="checkbox" id="html" />
                      <label for="html">Front Office</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="css" />
                      <label for="css">House Keeping</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="javascript" />
                      <label for="javascript">Food and Beverages</label>
                    </div>
                    <div class="form-group">
                      <input type="checkbox" id="javascript" />
                      <label for="javascript">Public Area</label>
                    </div>
                  </form>
                </div>
                <li>Free</li>
              </div>
            </div>
            <div id="items-row" class="col-lg-10">
              <div class="music-container row">
                <div class="col-sm-1">
                  <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                </div>
                <div class="col-sm-2">
                  <a href="previewMusic.html">
                    <div class="music-info">
                      <p>
                        <strong style="font-weight:bold;">
                          Music Name
                        </strong>
                        <br />
                        by Author Name
                      </p>
                    </div>
                  </a>
                </div>
                <div class="col-sm-1 button-play">
                  <input type="button" class="btn-play" />
                </div>
                <div class="col-sm-6 audio">
                  <div class="audio-spectrum"></div>
                </div>
                <div class="col-sm-1">
                  <div class="music-duration">
                    <p>03.00</p>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="download fas fa-download"></button>
                </div>
              </div>
              <div class="music-container row">
                <div class="col-sm-1">
                  <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                </div>
                <div class="col-sm-2">
                  <div class="music-info">
                    <p>
                      <strong style="font-weight:bold;">
                        Music Name
                      </strong>
                      <br />
                      by Author Name
                    </p>
                  </div>
                </div>
                <div class="col-sm-1 button-play">
                  <input type="button" class="btn-play" />
                </div>
                <div class="col-sm-6 audio">
                  <div class="audio-spectrum"></div>
                </div>
                <div class="col-sm-1">
                  <div class="music-duration">
                    <p>03.00</p>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="download fas fa-download"></button>
                </div>
              </div>
              <div class="music-container row">
                <div class="col-sm-1">
                  <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                </div>
                <div class="col-sm-2">
                  <div class="music-info">
                    <p>
                      <strong style="font-weight:bold;">
                        Music Name
                      </strong>
                      <br />
                      by Author Name
                    </p>
                  </div>
                </div>
                <div class="col-sm-1 button-play">
                  <input type="button" class="btn-play" />
                </div>
                <div class="col-sm-6 audio">
                  <div class="audio-spectrum"></div>
                </div>
                <div class="col-sm-1">
                  <div class="music-duration">
                    <p>03.00</p>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="download fas fa-download"></button>
                </div>
              </div>
              <div class="music-container row">
                <div class="col-sm-1">
                  <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                </div>
                <div class="col-sm-2">
                  <div class="music-info">
                    <p>
                      <strong style="font-weight:bold;">
                        Music Name
                      </strong>
                      <br />
                      by Author Name
                    </p>
                  </div>
                </div>
                <div class="col-sm-1 button-play">
                  <input type="button" class="btn-play" />
                </div>
                <div class="col-sm-6 audio">
                  <div class="audio-spectrum"></div>
                </div>
                <div class="col-sm-1">
                  <div class="music-duration">
                    <p>03.00</p>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="download fas fa-download"></button>
                </div>
              </div>
              <div class="music-container row">
                <div class="col-sm-1">
                  <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                </div>
                <div class="col-sm-2">
                  <div class="music-info">
                    <p>
                      <strong style="font-weight:bold;">
                        Music Name
                      </strong>
                      <br />
                      by Author Name
                    </p>
                  </div>
                </div>
                <div class="col-sm-1 button-play">
                  <input type="button" class="btn-play" />
                </div>
                <div class="col-sm-6 audio">
                  <div class="audio-spectrum"></div>
                </div>
                <div class="col-sm-1">
                  <div class="music-duration">
                    <p>03.00</p>
                  </div>
                </div>
                <div class="col-sm-1">
                  <button class="download fas fa-download"></button>
                </div>
              </div>
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
    </div>

    <script>
      window.onscroll = function() {
        scrollFunction();
      };
      var x = $("#navbar");

      function scrollFunction() {
        if (
          document.documentElement.scrollTop > 50 ||
          document.body.scrollTop > 50
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

      $("#type").keyup(function() {
        $("#usr").val($(this).val() + " example");
      });
    </script>

    <script>
      let show = document.getElementById("filter-row");
      let showButton = document.getElementById("show-filter");
      let items = document.getElementById("items-row");
      let showFilter = true;

        $(document).ready(function () {
            changeContainer(!showFilter)
        });

      $(showButton).click(function() {
        console.log(showFilter);
        changeContainer(!showFilter);
      });

      const changeContainer = el => {
        if (el) {
          //show
          console.log(showFilter);

          $(show).show();
          $(items).removeClass("col-lg-12");
          $(items).addClass("col-lg-10");
          $("#symbol").removeClass("fa-plus");
          $("#symbol").addClass("fa-minus");
          console.log(items);
          showFilter = !showFilter;
        } else {
          console.log(showFilter);
          $(show).hide();

          $(items).removeClass("col-lg-10");
          $(items).addClass("col-lg-12");

          $("#symbol").removeClass("fa-minus");
          $("#symbol").addClass("fa-plus");
          console.log(items);

          // showFilter = !el
          showFilter = !showFilter;
        }
      };

      $("#dropdown-departement").on("click", function() {
        $("#filter-cb").toggle();
      });

      $("#dropdown-premium").on("click", function() {
        $("#filter-premium-cb").toggle();
      });
    </script>
    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script>
      var container = document.querySelectorAll(".audio-spectrum");
      var ws = [1, 2, 3, 4, 5]
      var buttons = {
        play: document.querySelectorAll(".btn-play")
      };
      for (let i = 0; i < container.length; i++) {
            console.log(container[i]);

      ws[i] = WaveSurfer.create({
        container: container[i],
        waveColor: "#000",
        progressColor: "#03a9f4",
        height: "70",
        width: "200",
        barGap: 5,
        barHeigt: "20",
        resposive: true,
        minPxPerSec: 1,
        barWidth: 2
      });
    }
    for (let index = 0; index < ws.length; index++) {
      buttons.play[index].addEventListener(
        "click",
        function() {
          ws[index].play();
          buttons.play.disabled = true;
        },
        false
      );
    };
      
      // for
      // spectrum.on("ready", function() {
      //   buttons.play.disabled = false;
      // });

      window.addEventListener(
        "resize",
        function() {
          var currentProgress =
            spectrum.getCurrentTime() / spectrum.getDuration();
          spectrum.empty();
          spectrum.drawBuffer();

          spectrum.seekTo(currentProgress);

          buttons.play.disabled = false;
        },
        false
      );
        for (let i = 0; i < ws.length; i++) {
      ws[i].load("<?=base_url()?>assets/dummy/Radwips-Yumeterou.mp3");

        }
    </script>
  </body>
</html>

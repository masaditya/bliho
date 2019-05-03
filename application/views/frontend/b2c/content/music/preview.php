
<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
    <title>Bliho.</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/preview.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/music.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- <script src="https://stackpath.bootstr apcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/slick/slick-theme.css" />
</head>

<body>
    <div class="video">
        <div class="container-fluid content sec-1">
            <div class="col-xl-12 title-container">
                <h4> <strong> Title Item </strong> </h4>
                <p> Vacation / Vector / Grey</p>
                <p class="small-paragraph"> A month ago </p>
            </div>
            <div class="row top-padding">
                <div class="col-md-6 upper-left">
                    <div class="audio-preview">
                        <div id="audio-spectrum"></div>
                    </div>
                    <div class="audio-buttons">
                        <button id="btn-play"><i class="fas fa-play"></i></button>
                        <button id="btn-stop"> <i class="far fa-circle"></i> </button>
                        <button>Download Preview <span class="fas fa-download"></span></button>
                    </div>
                    <div class="row user">
                        <img src="<?=base_url()?>/assets/images/temp/user.png" alt="">
                        <div class="card-author">
                            <h4>Author Name</h4>
                            <p>View All Resource</p>
                        </div>
                        <button class="follow-music"> <span class="fas fa-user-plus"></span> Follow </button>
                    </div>

                    <div class="table-description">
                        <table class="blueTable">
                            <tbody>
                                <tr>
                                    <td>Created</td>
                                    <td>20 January 2019</td>
                                </tr>
                                <tr>
                                    <td>Format</td>
                                    <td>Mp3, WAV</td>
                                </tr>
                                <tr>
                                    <td>Bit rate</td>
                                    <td>3200</td>
                                </tr>
                                <tr>
                                    <td>Simple rate</td>
                                    <td>16-Bit Stereo, 44,1 Khz </td>
                                </tr>
                                <tr>
                                    <td>Track Length</td>
                                    <td>2:16</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="container-fluid">
                        <h6 style="margin-left: 70px;"> <strong>Items Tag</strong> </h6>
                        <div class="tag-flex-container">
                            <div class="tags"> Value
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Vector
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Grey
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Purple
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Luggage
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Vacation
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Hat
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="tags"> Trip
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 sec-1-right">
                    <h2>Love this item?</h2>
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-5">
                                <span key='0' class="fa fa-star"></span>
                                <span key='1' class="fa fa-star"></span>
                                <span key='2' class="fa fa-star"></span>
                                <span key='3' class="fa fa-star"></span>
                                <span key='4' class="fa fa-star"></span>
                            </div>
                            <i class="far fa-bookmark col-sm-1"></i>
                            <i class="fas fa-share-alt col-sm-1"></i>
                        </div>

                        <p class="desc-product">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, expedita
                            est
                            quibusdam ut
                            dignissimos autem modi dolorem eaque earum delectus? Iste animi eveniet dignissimos tempora
                            impedit! Eos explicabo sed veniam.</p>
                    </div>

                    <a href="#mod" rel="modal:open">
                        <button class="btn-download-preview">
                            Download
                        </button>
                    </a>


                    <!-- modal -->
                    <div id="mod" class="modal">
                        <div class="container-fluid">
                            <div style="margin-top:25px; margin-right: 30px;">
                                <center>
                                    <h4> <strong> Download options </strong>
                                    </h4>
                                    <p>You will download a resource created by <strong>Author Name</strong> </p>
                                </center>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-xl-6">
                                        <div style="text-align : center;">
                                            <a style="text-decoration:none;" href="<?=base_url()?>/assets/images/Group 10684@3x.png"
                                                download="<?=base_url()?>/assets/images/Group 10684@3x.png">
                                                <button id="modal-btn-premium">
                                                    Premium
                                                </button>
                                            </a>
                                            <p>
                                                from $75 / month
                                            </p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="modal-right">
                                            <a style="text-decoration:none;" href="<?=base_url()?>/assets/images/Group 10684@3x.png"
                                                download="<?=base_url()?>/assets/images/Group 10684@3x.png">
                                                <button id="modal-btn-free">
                                                    Free
                                                </button>
                                            </a>
                                            <p>
                                                You must sign in to download it
                                            </p>
                                            <p>Using this item in your web? <strong> Copy this link</strong> </p>

                                            <div class="input-group input-group-sm mb-3">

                                                <input type="text" class="form-control" aria-label="Small"
                                                    aria-describedby="inputGroup-sizing-sm">
                                                <div class="input-group-prepend">
                                                    <button class="input-group-text" id="inputGroup-sizing-sm">copy
                                                        <span class="fas fa-copy"></span>
                                                        <!-- <i class="fas fa-copy"></i> -->
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="file-description row">
                        <div class="col-md-5">
                            <div class="down-left">
                                <h6> <strong> App Support</strong> </h6>
                                <ul>
                                    <li> .WAV</li>
                                    <li> .mp3</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- modal up here -->
            </div>
        </div>
        
        <div class="sec-2">
            <div class="row">
                <div class="col-xl-8">
                    <h6 style="margin : 70px; margin-bottom: 50px;"> <strong> More From Author </strong> </h6>
                    <div class="multiple-items-music">
                        <div class="carousel-item ">
                            <div class="music-container music-carousel row">
                                <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                                <div class="carousel-music-info">
                                    <p>
                                        Music Name
                                        <br />
                                        by Author Name
                                    </p>
                                </div>
                                <button class="button-play-cat" type="button"
                                    id="btn-play"></button>
                                <div class="audio-spectrum-car"></div>
                                <p class="music-duration-car">03.00</p>
                                <button class="btn-download-car fas fa-download"></button>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="music-container music-carousel row">
                                <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                                <div class="carousel-music-info">
                                    <p>
                                        Music Name
                                        <br />
                                        by Author Name
                                    </p>
                                </div>
                                <button class="button-play-cat" type="button"
                                    id="btn-play"></button>
                                <div class="audio-spectrum-car"></div>
                                <p class="music-duration-car">03.00</p>
                                <button class="btn-download-car fas fa-download"></button>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="music-container music-carousel row">
                                <img class="music-icon" src="<?=base_url()?>/assets/images/temp/user.png" />
                                <div class="carousel-music-info">
                                    <p>
                                        Music Name
                                        <br />
                                        by Author Name
                                    </p>
                                </div>
                                <button class="button-play-cat" type="button"
                                    id="btn-play"></button>
                                <div class="audio-spectrum-car"></div>
                                <p class="music-duration-car">03.00</p>
                                <button class="btn-download-car fas fa-download"></button>
                            </div>
                        </div>

                        
                        


                    </div>                

                </div>
                <div class="col-md-4 float-card">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laborum, quod recusandae sit
                        eos
                        odio molestias aspernatur amet? Accusantium molestiae deserunt ipsam neque nisi est
                        excepturi
                        cumque magni at tempora?</p>
                    <form action="categories.html">
                        <button class="btn" type="submit" value="Go to Google">
                            Get Full Access
                        </button>
                    </form>
                </div>
            </div>


            <div class="container-fluid sec-2-left">
                <h6> <strong> Similar Graphics </strong> </h6>
            </div>
            <div class="centered-container">
                <div class="music-preview-container row">
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
                        <input type="button" id="btn-play" />
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
                <div class="music-preview-container row">
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
                        <input type="button" id="btn-play" />
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
                <div class="music-preview-container row">
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
                        <input type="button" id="btn-play" />
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
                <div class="music-preview-container row">
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
                        <input type="button" id="btn-play" />
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
                <div class="music-preview-container row">
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
                        <input type="button" id="btn-play" />
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
        window.onscroll = function () {
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

        $("#type").keyup(function () {
            $("#usr").val($(this).val() + " example");
        });
    </script>


    <script>
        let star = document.querySelectorAll(".fa-star")

        for (var i = 0; i < star.length; i++) {
            star[i].addEventListener(
                "click",
                function (e) {
                    let stars = (e.target).getAttribute('key');
                    console.log(stars);
                    for (let j = 0; j < i; j++) {
                        if (j <= stars) {
                            $(star[j]).addClass('checked');
                        } else {
                            $(star[j]).removeClass('checked');

                        }
                    }
                },
                false
            );
        }
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js">
    </script>

    <script>
        // let btnDownload = document.getElementById(btn - download);
    </script>

    <script src="https://unpkg.com/wavesurfer.js"></script>
    <script>
        var container = document.querySelectorAll(".audio-spectrum");
        var carousel = document.querySelectorAll(".audio-spectrum-car");

        var buttons = {
            play: document.getElementById("btn-play"),
            stop: document.getElementById("btn-stop")
        };

        var wsCarousel = [1, 2]
        var ws = [1, 2, 3, 4, 5]

        // var ws;
        for (let i = 0; i < container.length; i++) {
            console.log(container[i]);
            ws[i] = WaveSurfer.create({
                container: container[i],
                waveColor: "#cccccc",
                progressColor: "#f25456",
                height: "70",
                width: "500",
                barGap: 5,
                barHeigt: "20",
                resposive: true,
                minPxPerSec: 1,
                barWidth: 2,
                cursorColor: "#f0f1f3",
                cursorWidth: "2",
                maxCanvasWidth: 500,
                partialRender: true,
                scrollParent: false,
                fillParent: false,
                minPxPerSec: 5.5                
            })
        }

        for (let i = 0; i < carousel.length; i++) {
            console.log(carousel[i]);
            wsCarousel[i] = WaveSurfer.create({
                container: carousel[i],
                waveColor: "#cccccc",
                progressColor: "#f25456",
                height: "70",
                width: "500",
                barGap: 5,
                barHeigt: "20",
                resposive: true,
                minPxPerSec: 1,
                barWidth: 2,
                cursorColor: "#f0f1f3",
                cursorWidth: "2",
                maxCanvasWidth: 500,
                partialRender: true,
                scrollParent: false,
                fillParent: false,
                minPxPerSec: 3.5
            })
        }
        // var spectrumCatalog = WaveSurfer.create

        var spectrum = WaveSurfer.create({
            container: "#audio-spectrum",
            waveColor: "#cccccc",
            progressColor: "#f25456",
            height: "100",
            width: "500",
            barGap: 5,
            barHeigt: "20",
            resposive: true,
            minPxPerSec: 1,
            barWidth: 2,
            cursorColor: "#f0f1f3",
            cursorWidth: "2",
            maxCanvasWidth: 500,
            partialRender: true,
            scrollParent: false,
            fillParent: false,
            minPxPerSec: 4.5
        });

        buttons.play.addEventListener(
            "click",
            function () {
                spectrum.play();
                buttons.play.disabled = true;
                buttons.stop.disabled = false;
            },
            false
        );

        buttons.stop.addEventListener(
            "click",
            function () {
                spectrum.stop();
                buttons.stop.disabled = true;
                buttons.play.disabled = false;
            },
            false
        );

        spectrum.on("ready", function () {
            buttons.play.disabled = false;
        });

        window.addEventListener(
            "resize",
            function () {
                var currentProgress =
                    spectrum.getCurrentTime() / spectrum.getDuration();
                spectrum.empty();
                spectrum.drawBuffer();

                spectrum.seekTo(currentProgress);
                buttons.play.disabled = false;
            },
            false
        );
        spectrum.load("<?=base_url()?>assets/dummy/Radwips-Yumeterou.mp3");

        for (let i = 0; i < ws.length; i++) {
            ws[i].load("<?=base_url()?>assets/dummy/Radwips-Yumeterou.mp3");
        }
        for (let i = 0; i < wsCarousel.length; i++) {
            wsCarousel[i].load("<?=base_url()?>assets/dummy/Radwips-Yumeterou.mp3");
        }
    </script>
       <script>

           $(".follow-music").click(function () { 
            var text = $('.follow-music').text();
            console.log(text);
            $(".follow-music").toggleClass("unfollow-music")
            $(".follow-music").html(text == "Unfollow" ? '<span><i class="fas fa-user-plus"></i></span>Follow' : '<span><i class="fas fa-user-minus"></i></span>Unfollow')
        })
        // let btnDownload = document.getElementById(btn - download);
        $(document).ready(function () {
            $('.variable-width').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                variableWidth: true,
                prevArrow: '<button type="button" class="slick-prev ">Previous</button>'
            });

            $('.multiple-items-music').slick();
        })
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/css/slick/slick.min.js"></script>
</body>
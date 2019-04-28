<!DOCTYPE html>
<html>

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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/preview.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="js/loader.js"></script>
    <script src="js/EZView.js"></script>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css" />
</head>

<body>
    <div class="video">
        <div data-include="header"></div>


        <div class="container-fluid content sec-1">
            <div class="col-xl-12 title-container">
                <h4> <strong> Title Item </strong> </h4>
                <p> Vacation / Vector / Grey</p>
                <p class="small-paragraph"> A month ago </p>
            </div>
            <div class="row top-padding">
                <div class="col-md-6 upper-left">
                    <img id="sec1-image" src="images/Group 10989@3x.png" alt="">
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
                                            <a style="text-decoration:none;" href="./images/Group 10684@3x.png"
                                                download="./images/Group 10684@3x.png">
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
                                            <a style="text-decoration:none;" href="./images/Group 10684@3x.png"
                                                download="./images/Group 10684@3x.png">
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


                        <!-- <a href="#" rel="modal:close">Close</a> -->
                    </div>

                    <!-- Link to open the modal
                    <p><a href="#ex1" rel="modal:open">Open Modal</a></p> -->

                    <!-- modal -->

                    <p class="small-paragraph" style="margin-top:25px; margin-left:35px;">Illustration in .JPEG or .PNG
                        format</p>
                </div>
                <div class="col-md-6 upper-left">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="minicontainer">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <img class="miniavatar" src="images/temp/user.png" alt="">
                                    </div>
                                    <div class="col-xs-6">
                                        <h6> <strong>Author Name</strong> </h6>
                                        <p class="small-paragraph">View all reources</p>
                                    </div>
                                </div>
                            </div>
                            <form action="categories.html" class="follow-button">
                                <button class="btn" type="submit" value="Go to Google">
                                    <span><i class="fas fa-user-plus"></i></span> Follow
                                </button>
                            </form>
                        </div>
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
                <div class="col-md-6 sec-1-right-down">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="down-left">
                                <h6> <strong> App Support</strong> </h6>
                                <ul>
                                    <li> .JPEG</li>
                                    <li> .PNG</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati illum
                                voluptatem
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-2">
            <div class="row">
                <div class="col-xl-8">
                    <div class="multiple-items">
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                    </div>
                </div>
                <div class="col-md-4 float-card">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum laborum, quod recusandae sit eos
                        odio molestias aspernatur amet? Accusantium molestiae deserunt ipsam neque nisi est excepturi
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
                <div class="col-sm-12">
                    <div class="variable-width">
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                        <div data-include="card-image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-include="footer"></div>

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
    <script>
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

            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 2
            });
        })
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>

</body>


</html>
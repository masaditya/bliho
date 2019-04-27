<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/preview.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body>
    <div class="video">
        <nav id="navbar" class="navbar navbar-default navbar-expand-lg navbar-light">
            <a class="navbar-brand brand-text" href="/index.html"><img src="../../images/temp/logo.png" /></a>
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
        <div class="container-fluid content sec-1">
            <div class="col-xl-12 title-container">
                <h4> <strong> Title Item </strong> </h4>
                <p> Vacation / Vector / Grey</p>
                <p class="small-paragraph"> A month ago </p>
            </div>
            <div class="row top-padding">
                <div class="col-md-6 upper-left">
                    <div class="card big-card">
                        <div class="card-img-top">
                            <!-- <img class="imgpreview" src="../../images/Group 10684@3x.png"
                                href="../../doc/MongoDBNotesForProfessionals.pdf"> -->
                            <img id="pdfpreview" src="../../../../images/icon_bliho_inaktif_doc@3x.png"
                                href="../../doc/MongoDBNotesForProfessionals.pdf" />
                        </div>
                        <div class="card-body">

                            <!-- <img href="../../doc/MongoDBNotesForProfessionals.pdf"> -->
                            <button href="../../doc/MongoDBNotesForProfessionals.pdf" id="previewbtn">
                                Preview
                            </button>

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
                                            <button id="modal-btn-premium">
                                                Premium
                                            </button>
                                            <p>
                                                from $75 / month
                                            </p>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="modal-right">
                                            <button id="modal-btn-free">
                                                Free
                                            </button>
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
                                        <img class="miniavatar" src="../../images/temp/user.png" alt="">
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
                                    <li> .doc</li>
                                    <li> .pdf</li>
                                    <li> .pptx</li>
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
                    <div class="container-fluid sec-2-left">
                        <h6> <strong> New From Author </strong> </h6>
                        <div class="container-fluid carousel-left">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="up" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- card down here -->

                                            <!-- active carousel here -->
                                            <div class="carousel-item active">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-5" style="margin-left:9%;">
                                                            <div class="card" style="width: 100%; border-radius: 5%;">
                                                                <div class="card-img-top">
                                                                    <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                        alt="Card image cap" />
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="item col col-md-7 ">
                                                                            <p class="item-name">Training Manual -
                                                                                Template</p>
                                                                            <a href="google.com">
                                                                                <p class="item-author">by Author Name
                                                                                </p>
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
                                                        </div>
                                                        <div class="col-lg-5 ">
                                                            <div class="card">
                                                                <div class="card-img-top">
                                                                    <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                        alt="Card image cap" />
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="item col col-md-7 ">
                                                                            <p class="item-name">Training Manual -
                                                                                Template</p>
                                                                            <a href="google.com">
                                                                                <p class="item-author">by Author Name
                                                                                </p>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- carousel unactive here -->

                                            <div class="carousel-item ">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-5" style="margin-left:9%;">
                                                            <div class="card" style="width: 100%; border-radius: 5%;">
                                                                <div class="card-img-top">
                                                                    <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                        alt="Card image cap" />
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="item col col-md-7 ">
                                                                            <p class="item-name">Training Manual -
                                                                                Template</p>
                                                                            <a href="google.com">
                                                                                <p class="item-author">by Author Name
                                                                                </p>
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
                                                        </div>
                                                        <div class="col-lg-5 ">
                                                            <div class="card">
                                                                <div class="card-img-top">
                                                                    <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                        alt="Card image cap" />
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="item col col-md-7 ">
                                                                            <p class="item-name">Training Manual -
                                                                                Template</p>
                                                                            <a href="google.com">
                                                                                <p class="item-author">by Author Name
                                                                                </p>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- card up here -->

                                        </div>

                                        <a href="#up" class="carousel-control-prev" data-slide="prev">
                                            <span class="carousel-control-prev-icon">
                                            </span>
                                        </a>
                                        <a href="#up" class="carousel-control-next" data-slide="next">
                                            <span class="carousel-control-next-icon">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="container-fluid carousel-left">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="down" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- card down here -->

                                    <!-- active carousel here -->
                                    <div class="carousel-item active">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-lg-3" style="margin-left: 9%;">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- carousel unactive here -->

                                    <div class="carousel-item ">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-lg-3" style="margin-left: 9%;">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-img-top">
                                                            <img src="../../images/icon_bliho_inaktif_doc@3x.png"
                                                                alt="Card image cap" />
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class=" card-text item col col-md-7 ">
                                                                    <p class="item-name">Illustration Name -
                                                                        Vector</p>
                                                                    <p class="item-author">by Author Name</p>
                                                                </div>
                                                                <div class="item col col-md-3">
                                                                    <p class="item-type-name">Ai,PNG</p>
                                                                </div>
                                                                <div class="item download col col-md-2">
                                                                    <i class="fas fa-arrow-down"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#down" class="carousel-control-prev" data-slide="prev">
                                    <span class="carousel-control-prev-icon">
                                    </span>
                                </a>
                                <a href="#down" class="carousel-control-next" data-slide="next">
                                    <span class="carousel-control-next-icon">
                                    </span>
                                </a>
                            </div>
                        </div>
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
    <script src="../../js/EZView.js"></script>
    <script src="../../js/draggable.js"></script>
    <script>
        // let btnDownload = document.getElementById(btn - download);
        // let btnpreview = document.getElementById("previewbtn");

        $('#previewbtn').EZView();

        // $(btnpreview).click(function () {
        //     $('#pdfpreview').EZView();
        // })
    </script>


</body>


</html>
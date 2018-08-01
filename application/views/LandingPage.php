<div class="navFix fixed-top">
    <div class="brand pull-left" id="menu">
        <h5>
            <i class="fa fa-bars"></i>
        </h5>
    </div>
<?php
    if($this->session->userdata('username') != null){
?>
    <div class="brand pull-left" id="menu">
        <h5>
            Hello, <?= $this->session->userdata('username'); ?>
        </h5>
    </div>
<?php
    }
?>
    <div class="brand pull-right">
        <h5>Eiko Hotel</h5>
    </div>
</div>

<div class="container-fluid fixed-top" id="navHide">
    <div class="row">
        <div class="col-lg-3" id="navHideContent">
            <div class="container">
                <div class="my-3"></div>
            
                <h3 class="pull-right" id="closeMenu"><i class="fa fa-angle-double-left"></i></h3>
                
                <div class="my-1"></div>

                <h1 class="display-4" style="color: white;">
                    Eiko Hotel
                    <div class="underlineCustom"></div>
                </h1>
                
                <div class="my-4"></div>

                <a href="">
                    <div class="navContent">
                        <h6>Home</h6>
                    </div>
                </a>

                <a href="">
                    <div class="navContent">
                        <h6>Book Room</h6>
                    </div>
                </a>

                <a href="">
                    <div class="navContent">
                        <h6>Log In</h6>
                    </div>
                </a>
                
                <a href="<?= base_url(); ?>index.php/Controller/logout">
                    <div class="navContent">
                        <button type="button" class="btn btn-warning">
                            <h6>Log Out</h6>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>



<div id="header">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4">Hello, <small style="color: #FD2E2E">customer</small></h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic exercitationem fugit recusandae culpa esse? Labore nulla minima provident quia ab sunt blanditiis quae enim facere numquam. Animi ea dicta eos!
                    </p>
                    <a href="<?= base_url(); ?>index.php/Controller/bookPage">
                        <button type="button" class="btn btn-danger">
                            <h5>Book Room</h5>
                        </button>
                    </a>
                    <a href="<?= base_url(); ?>index.php/Controller/loginPage">
                        <button type="button" class="btn btn-dark">
                            <h5>Log In Here</h5>
                        </button>
                    </a>
                </div>
            </div>
            <h1 class="display-1 text-center">
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </h1>
        </div>
    </div>
</div>

<div class="my-4" id="intro"></div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-3">Why Us ?</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magni facere corporis inventore animi quam non impedit, repellat rerum nostrum officiis quia voluptatibus? Suscipit, cupiditate deleniti ducimus error cumque necessitatibus.
                </p>
            </div>
            <div class="col-lg-12">
                
            </div>
        </div>

        <div class="my-4"></div>

        <div class="row justify-content-center">
            <div class="col-lg-3">
                <h1 class="display-4">
                    <small>Our </small>Facility
                    <div class="underlineCustom"></div>
                </h1>
            </div>
        </div>

        <div class="my-4"></div>

        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12">
                <div class="imgContainer">
                    <img src="<?= base_url(); ?>assets/img/gym.jpeg" class="img-fluid" alt="">
                    <div class="imgDesc lead text-center">
                        GYM
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12">
                <div class="imgContainer">
                    <img src="<?= base_url(); ?>assets/img/pool.jpg" class="img-fluid" alt="">
                    <div class="imgDesc lead text-center">
                        POOL
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12">
                <div class="imgContainer">
                    <img src="<?= base_url(); ?>assets/img/res.jpeg" class="img-fluid" alt="">
                    <div class="imgDesc lead text-center">
                        RESTAURANT
                    </div>
                </div>
            </div>
        </div>

        <div class="my-4"></div>
        
        <div class="row justify-content-center">
            <h1 class="display-4">
                <small>Our </small>Service
                <div class="underlineCustom"></div>
            </h1>
        </div>
    </div>

    <div class="my-4"></div>

    <div class="row serviceCustom justify-content-end" style="background:url(<?= base_url(); ?>assets/img/service.jpeg) no-repeat center;">
        <div class="col-lg-5 serviceDesc text-center lead">
            <div class="container">
                <h1 class="display-4"><small>Room</small> Service</h1>
                <p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque non voluptas cumque corrupti eligendi. Harum odit similique nulla assumenda cupiditate velit voluptatibus modi alias, labore, veritatis nobis molestias eius error.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et repellat iure iste reiciendis qui sed nesciunt eum illo veniam corrupti explicabo cum neque, quo optio voluptates nulla sint, quas animi.
                </p>
            </div>
        </div>
    </div>

    <div class="my-4"></div>

    <div class="row serviceCustom" style="background:url(<?= base_url(); ?>assets/img/health.jpeg) no-repeat center;">
        <div class="col-lg-5 serviceDesc text-center lead">
            <div class="container">
                <h1 class="display-4"><small>Medical</small> Care</h1>
                <p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque non voluptas cumque corrupti eligendi. Harum odit similique nulla assumenda cupiditate velit voluptatibus modi alias, labore, veritatis nobis molestias eius error.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et repellat iure iste reiciendis qui sed nesciunt eum illo veniam corrupti explicabo cum neque, quo optio voluptates nulla sint, quas animi.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    var primary = "#FD2E2E";
    var secondary = "#CF1B1B";
    var dark = "#900D0D";

    
    $(window).scroll(function () { 
        if($(window).scrollTop() >= ($("#intro").offset().top - ($(".navFix").height() + 45))){
            $(".navFix").css({
                "background" : "rgba(144, 13, 13, 0.8)"
            });
        }
        else{
            $(".navFix").css({
                "background" : "none"
            });
        }
    });


    $(".fa-angle-double-down").on("click", function(){
        $("html,body").animate({
            scrollTop : ($("#intro").offset().top - ($(".navFix").height() + 45))
        }, 500);
    });
    
    $("#menu").on("click", function(){
        $("#navHide").css({
            "transform" : "translateX(0)"
        });
    });

    $("#closeMenu").on("click", function(){
        $("#navHide").css({
            "transform" : "translateX(-100%)"
        });
    });
    
</script>
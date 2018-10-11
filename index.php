<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->

    <link href="img/favicon.png" rel="icon">

    <!-- LOADING BOOTSTRAP AND FONTAWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- LOADING CSS -->

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Anton|Great+Vibes|Philosopher|Quicksand:400,700|Rajdhani" rel="stylesheet">

    <link href="css/button.css" type="text/css" rel="stylesheet">

    <!-- TITLE -->

    <title> Smyrna Network </title>


</head>

<body id="home" class="noselect">

    <!-- NAVICATION -->

    <nav class="navbar navbar-expand-xl sticky-top navbar-light bg-light py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="img/logo1.png" height="40px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link scroll" href="#about"> <i class="fas fa-church"></i> About Us </a> </li>
                    <li class="nav-item"> <a class="nav-link scroll" href="#sermon"> <i class="fas fa-book-open"></i> This week's sermon </a> </li>
                    <li class="nav-item"> <a class="nav-link scroll" href="#PR"> <i class="fas fa-paper-plane"></i> Prayer Request </a> </li>
                    <li class="nav-item"> <a class="nav-link scroll" href="#TS"> <i class="fas fa-comment"></i> Testimony </a> </li>
                    <li class="nav-item"> <a class="nav-link scroll" href="#Ourbranches"> <i class="fas fa-code-branch"></i> Our Branches </a> </li>
                    <li class="nav-item"> <a class="nav-link scroll" href="#Contactus"> <i class="fas fa-phone"></i> Contact-Us </a> </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- IMAGE SLIDE -->
    <section>
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bg1.png">
                </div>
                <div class="carousel-item">
                    <img src="img/bg2.png">
                </div>
                <div class="carousel-item">
                    <img src="img/bg3.png">
                    <div class="carousel-caption">
                        <button type="button" class="btn btn-danger"> <a href="https://www.youtube.com/channel/UCWnc_ruzZjgT83xFGSmMsfQ" target="_blank"> <i class="fab fa-youtube"></i> Visit Our YouTube Channel</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT US -->
    <div class="container col-12 bg-info" id="about">
        <div class="container-fluid py-5">

            <h1 class="mt-2 mb-3 text-center">About Us</h1>

            <p class="lead text-center">Smyrna Church Bogawantalawa ministry was started in <strong>1977</strong> by Smyrna Church Nuwara Eliya. <b>Pas.V.Ponnambalam & Pas.S.J.Sylvester</b> pioneered the ministry in Bogawantalawa. This ministry not only did gospel ministry and it is involed in social workes too.
                <br/> In 1993, this ministry has donated a Children ward to the Goverment Hospital in Bogawantalawa. Now, this ministry has branches in many area in Sri Lanka.</p>

        </div>
    </div>

    <div class="container col-lg-10 my-5 py-5" id="sermon">
        <h1 class="mb-5 text-center">This Week's Sermon</h1>
        <div class="row">
            <div class="col-lg-3">
                <img class="rounded mb-3" src="img/pastor.jpg" alt="Generic placeholder image" width="180" height="180">
            </div>
            <?php
                    require("back-end/functions/dbConnection.php");
                    $obj=new dbconnection();
                    $con_db=$obj->getConnection();
                
                    $sql="SELECT * FROM addsermon";
                    $res=mysqli_query($con_db,$sql) or die("SERVER ERROR");
                    while($row=mysqli_fetch_array($res)){
                      
                        echo "<div class='col-lg-9'>
                                <h2>Preched By : ".$row['Pastor']."</h2>
                                <h4>Title :".$row['Title']."</h4>
                                <p id='sermontxt' style='font-size:22px;'>".$row['Sermon']."</p>
                                <p class='text-right'>On: ".$row['Date']."<p>
                            </div>";
                    }
                    $obj->close($con_db);
                
                
                
                ?>
        </div>
    </div>

    <hr>



    <div class="container col-lg-10 sm-12 my-5 pt-5" id="PR">
        <h1 class="mb-5 text-center">Prayer Request</h1>
        <div class="jumbotron">
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label for="Name" class="red">Full Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Full Name" id="fname">
                </div>

                <div class="col-lg-4 sm-12 mb-3">
                    <label for="Email ID" class="red">Email ID</label>
                    <input type="email" class="form-control form-control-sm" placeholder="Email ID" id="cid">
                </div>

                <div class="col-lg-4 sm-12 mb-3">
                    <label for="Contact" class="green">Contact Number</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Contact Number" id="cno">
                </div>

                <div class="col-lg-4 sm-12 mb-3">
                    <label for="Country" class="green">Address</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Address" id="cty">
                </div>

                <div class="col-12 mb-3">
                    <label for="Name" class="red">Request</label>
                    <textarea class="form-control form-control-sm" placeholder="Request" rows="6" id="msg"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-sm" id="snd">Send <i class="fas fa-paper-plane"></i> </button>
            </div>
            <div class="alert alert-danger mt-3 text-center" style="display:none;" id="err"> <i class="fas fa-exclamation-triangle"></i> Please Fill Required Sections!!! <i style="color:green;"><br> (Contact Number and Address are Not Required!!!)</i></div>
        </div>
    </div>







    <!-- TESTIMONY -->
    <div id="TS" class="container marketing mb-5 pt-5">
        <div>
            <h1 class="mb-5 text-center">Testimony of this week</h1>
        </div>

        <div class="container">
            <div class="col-12">
                <?php
                    $obj=new dbconnection();
                    $con_db=$obj->getConnection();
                
                    $sql="SELECT * FROM addtestimony";
                    $res=mysqli_query($con_db,$sql) or die("SERVER ERROR");
                    echo "<div class='row'>";
                    while($row=mysqli_fetch_array($res)){
                      
                        echo "<div class='col-lg-4 sm-12 p-3 border text-center'>
                                <img class='rounded' src='img/tes.png' alt='Generic placeholder image' width='100' height='100'>
                                <h2 class='pt-2'>".$row['Name']."</h2>
                                <p>".$row['Testimony']."</p>
                                <p><small>Date: ".$row['Date']."</small></p>
                            </div>";
                    }
                    echo "</div>";
                    $obj->close($con_db);
                
                
                
                ?>
            </div>
        </div>

    </div>


    <!-- TESTIMONY SUBMIT -->

    <div class="container col-12 mb-5 pt-5">
        <div>
            <h1 class="mb-5 text-center">Share Your Testimony</h1>
        </div>
        <div class="jumbotron">
            <div class="form-row">
                <div class="col-12 mb-3">
                    <label for="Fname" class="Tred">Full Name</label>
                    <input type="text" class="form-control form-control-sm" id="Tfname" placeholder="Full Name">
                </div>

                <div class="col-md-12 mb-3">
                    <label for="Cnty" class="Tred">Address</label>
                    <input type="text" class="form-control form-control-sm" id="Tcty" placeholder="Address">
                </div>

                <div class="col-12 mb-3">
                    <label for="Pr" class="Tred">Testimony</label>
                    <textarea class="form-control form-control-sm" id="Tes" placeholder="Testimony" rows="4"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-sm" type="button" id="shr">Share <i class="fas fa-share-alt"></i></button>
            </div>
            <div class="alert alert-danger text-center mt-3" id="err2" style="display:none;">
                <i class="fas fa-exclamation-triangle"></i> Please Fill Required Sections!!!
            </div>
        </div>
    </div>

    <!-- OUR BRANCHES -->
    <section id="Ourbranches" class="py-5">
        <div>
            <h1 class="text-center">Our Branches</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
                    <div class="card  text-center">
                        <div class="card-header">
                            <h2> <i class="far fa-compass"></i> Norwood</h2>
                        </div>
                        <div class="card-body">
                            <h5> <i class="fas fa-user-tie"></i> Pas.K.Yogarajah</h5>
                            <p> Smyrna Church,<br>Norwood Janpathu,<br>Norwood.</p>
                        </div>
                        <div class="card-footer"> <i class="fas fa-phone"></i> 071 6070139</div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
                    <div class="card  text-center">
                        <div class="card-header">
                            <h2> <i class="far fa-compass"></i> Mahanilu</h2>
                        </div>
                        <div class="card-body">
                            <h5> <i class="fas fa-user-tie"></i> Pas.R.William Rasiah</h5>
                            <p> Smyrna Church,<br>Mahanilu<br>Norwood.</p>
                        </div>
                        <div class="card-footer"> <i class="fas fa-phone"></i> 076 3643501</div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
                    <div class="card  text-center">
                        <div class="card-header">
                            <h2> <i class="far fa-compass"></i> Maskeliya</h2>
                        </div>
                        <div class="card-body">
                            <h5> <i class="fas fa-user-tie"></i> Pas.S.J.Sylvester</h5>
                            <p>Smyrna Church,<br>Seaton Estate,<br>Maskeliya.</p>
                        </div>
                        <div class="card-footer"> <i class="fas fa-phone"></i> 071 9122231</div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
                    <div class="card  text-center">
                        <div class="card-header">
                            <h2> <i class="far fa-compass"></i> Negambo</h2>
                        </div>
                        <div class="card-body">
                            <h5> <i class="fas fa-user-tie"></i> Pas.T.Karunaharan</h5>
                            <p> Smyrna Church,<br>268/1 Chilaw Road,<br>Dhalupatha(Kattuwa).</p>
                        </div>
                        <div class="card-footer"> <i class="fas fa-phone"></i> 077 5214476</div>
                    </div>
                </div>
                <div class="col-9 col-sm-6 col-lg-4 mx-auto my-4">
                    <div class="card  text-center">
                        <div class="card-header">
                            <h2> <i class="far fa-compass"></i> Batticaloa</h2>
                        </div>
                        <div class="card-body">
                            <h5> <i class="fas fa-user-tie"></i> Pas.S.Vasantha Kumar</h5>
                            <p> Smyrna Church,<br>Main Street,<br>Thiraimadu,Oorani.</p>
                        </div>
                        <div class="card-footer"> <i class="fas fa-phone"></i> 071 4030959</div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!--- Contact Us --->
    <section id="Contactus" class="py-5">
        <h1 class="mb-5 text-center">Contact Us</h1>
        <div class="container-fluid no-padding">
            <div class="row">
                <div class="col-md-6 my-3 align-self-center">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7728460442454!2d80.67368721477217!3d6.797468295086908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae38fd2126b8f9d%3A0x609300b5b0540722!2sSmyrna+Church!5e0!3m2!1sen!2slk!4v1527759538037" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 sm-12 my-3">
                    <div class="card text-white bg-info text-center" style="height:450px;">
                        <div class="card-header">
                            <h2>Smyrna Network</h2>
                        </div>
                        <div class="card-body py-5">
                            <h4>Pas.S.J.Sylvester</h4>
                            <p>No 60, Smyrna Church<br>Sripura<br>Bogawntalawa.</p>
                            <p>052 226 7593</p>
                            <p>071 912 2231</p>
                        </div>
                        <div class="card-footer px-5 d-flex justify-content-between">
                            <a class="ico1" href="https://www.facebook.com/smyrnachurch.60.bogo" target="_blank"><i class="fab fa-facebook fa-2x"></i> </a>
                            <a class="ico2" href="https://twitter.com/SmyrnachBogo" target="_blank"><i class="fab fa-twitter fa-2x"></i> </a>
                            <a class="ico3" href="https://www.youtube.com/channel/UCWnc_ruzZjgT83xFGSmMsfQ" target="_blank"><i class="fab fa-youtube fa-2x"></i> </a>
                            <a class="ico4" id="locaction" href="https://goo.gl/maps/BcNuQWVWYjH2" target="_blank"><i class="fas fa-location-arrow fa-2x"></i> </a>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>

    <div>
        <a href="#home" id="top" class="scroll"> <i class="fas fa-angle-double-up fa-2x"></i> </a>
    </div>

    <footer class="footer bottom py-3 bg-dark text-white">
        <div class="container">
            <p class="text-center pt-2" id="ftx"> Copyright &copy; Smyrna Network. | All rights reserved 2018</p>
            <hr class="py-0 bg-primary">
        </div>
        <div class="container row" id="subs">
            <input type="email" class="form-control col-lg-6 mx-3 " id="email" name="email" placeholder="Email">
            <button class="btn btn-danger col-lg-2" type="button" id="btnsub">Subscribe <i class="fas fa-bell"></i></button>
        </div>
        <p class="text-right pr-3 py-0 m-0"><i class="fas fa-plug" id="pwr"></i>Powered by Daystar Creactions </p>
    </footer>


    <!-- SMOOTH -->







    <!-- PRrq SCRIPT--->
    <script type="text/javascript" src="Functions/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#snd").click(function() {

                var fName = $("#fname").val();
                var Eid = $("#cid").val();
                var conNum = $("#cno").val();
                var Ctry = $("#cty").val();
                var PryRq = $("#msg").val();

                if (fName == "" || Eid == "" || PryRq == "") {
                    swal({
                        title: "Oopss!",
                        text: "Check Your Inputs!!!",
                        icon: "error",
                        button: "Ok",
                    })
                    $("#err").css("display", "block");
                    $(".red").css("color", "red");
                    $(".green").css("color", "green");
                } else if (fName == " " || Eid == " " || PryRq == " ") {
                    swal({
                        title: "Oopss!",
                        text: "Once Again Check Your Inputs!!!",
                        icon: "error",
                        button: "Ok",
                    })
                    $("#err").css("display", "block");
                    $("#err").html("<i class='fas fa-exclamation-triangle'></i> Full Name, Email ID and Prayer Requset Can't be Empty!!!");
                    $(".red").css("color", "red");
                } else {
                    $.post("back-end/functions/getMsg.php", {
                            fname: fName,
                            cid: Eid,
                            cno: conNum,
                            cty: Ctry,
                            msg: PryRq
                        },

                        function(data, status) {
                            if (status == "success") {
                                swal({
                                        title: "Praise God!",
                                        text: "Your Prayer Request was Successfully Sent!",
                                        icon: "success",
                                        button: "Ok",
                                    })
                                    .then(val => {
                                        if (val) {
                                            location.reload();
                                        }
                                    });
                            }


                        });

                }
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#shr").click(function() {

                var Tfname = $("#Tfname").val();
                var Tcty = $("#Tcty").val();
                var Tes = $("#Tes").val();

                if (Tfname == "" || Tcty == "" || Tes == "") {
                    swal({
                        title: "Oopss!",
                        text: "Check Your Inputs!!!",
                        icon: "error",
                        button: "Ok",
                    })
                    $("#err2").css("display", "block");
                    $(".Tred").css("color", "red");
                } else if (Tfname == " " || Tcty == " " || Tes == " ") {
                    swal({
                        title: "Oopss!",
                        text: "Once Again Check Your Inputs!!!",
                        icon: "error",
                        button: "Ok",
                    })
                    $("#err2").css("display", "block");
                    $(".Tred").css("color", "red");
                    $("#err2").html("<i class='fas fa-exclamation-triangle'></i> Full Name, Address and Testimony Can't be Empty!!!");

                } else {
                    $.post("back-end/functions/getTestimony.php", {
                            Tfname: Tfname,
                            Tcty: Tcty,
                            Tes: Tes
                        },

                        function(data, status) {
                            if (status == "success") {

                                swal({
                                        title: "Praise God!",
                                        text: "Your Your Testimony was Successfully Sent!",
                                        icon: "success",
                                        button: "Ok",
                                    })
                                    .then(val => {
                                        if (val) {
                                            location.reload();
                                        }
                                    });
                            }


                        });

                }
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btnsub").click(function() {

                var email = $("#email").val()

                if (email == "" || email == " ") {
                    swal({
                        title: "Error!",
                        text: "Enter Email ID!",
                        icon: "error",
                        button: "Ok",
                    })
                } else {
                    $.post("../back-end/functions/getMailID.php", {
                            email: email
                        },
                        function(data, status) {
                            swal({
                                    title: "Praise God!",
                                    text: "You have been successfully subscribed!",
                                    icon: "success",
                                    button: "Ok",
                                })
                                .then(val => {
                                    if (val) {
                                        location.reload();
                                    }
                                });
                        }


                    )
                }
            });
        });

    </script>


    <!-- SCRIPTS -->
    <script src="back-end/lib/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
</body>

</html>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travelgo.id</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url("assets")?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url("assets")?>/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url("assets")?>/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url("assets")?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url("assets")?>/css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url("assets")?>/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url("assets")?>/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="<?php echo base_url("assets")?>/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="<?php echo base_url("assets")?>css/switchery/switchery.min.css" />


    <script src="<?php echo base_url("assets")?>/scripts/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/notify/pnotify.buttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/notify/pnotify.nonblock.js"></script>
    <script type="text/javascript">
        
    </script>
    <link href="<?php echo base_url("assets")?>/css/select/select2.min.css" rel="stylesheet">
</head>
<body class="nav-md">
    <div class="container body">
    <input type="hidden" id="template_id" />
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title">                        
                        <center><img src="<?php echo base_url("assets")?>/images/logo.svg" width="150px" style="background:white;padding:10px;border-radius:10px"></center>
                    </a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="<?php echo base_url("assets")?>/images/user1.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo $_SESSION["name"]?></h2>
                    </div>
                </div>
                <!-- /menu prile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>&nbsp;</h3>
                        <ul class="nav side-menu">
                            
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Logout" onclick="logout()">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav class="" role="navigation">
                   
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main" id="main_content">
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="">
                <p class="pull-right">
                    <span class="lead"> <i class="fa fa-play"></i> Digital Signage </span>
                </p>
            </div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<script src="<?php echo base_url("assets")?>/scripts/bootstrap.min.js"></script>
<!-- chart js -->
<script src="<?php echo base_url("assets")?>/scripts/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="<?php echo base_url("assets")?>/scripts/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo base_url("assets")?>/scripts/icheck/icheck.min.js"></script>
<!-- tags -->
<script src="<?php echo base_url("assets")?>/scripts/tags/jquery.tagsinput.min.js"></script>
<!-- switchery -->
<script src="<?php echo base_url("assets")?>/scripts/switchery/switchery.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/moment.min2.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/datepicker/daterangepicker.js"></script>
<!-- richtext editor -->
<script src="<?php echo base_url("assets")?>/scripts/editor/bootstrap-wysiwyg.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/editor/external/jquery.hotkeys.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/editor/external/google-code-prettify/prettify.js"></script>
<!-- select2 -->
<script src="<?php echo base_url("assets")?>/scripts/select/select2.full.js"></script>
<!-- form validation -->
<script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/parsley/parsley.min.js"></script>
<!-- textarea resize -->
<script src="<?php echo base_url("assets")?>/scripts/textarea/autosize.min.js"></script>
<!-- Autocomplete -->
<script type="text/javascript" src="<?php echo base_url("assets")?>/scripts/autocomplete/countries.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/autocomplete/jquery.autocomplete.js"></script>
<script src="<?php echo base_url("assets")?>/scripts/custom.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: "<?php echo site_url("home/get_menus")?>",
            cache: false
        }).done(function (data) {
            $('.nav.side-menu').html(data);
            $('#sidebar-menu li ul').slideUp();
            $('#sidebar-menu li').removeClass('active');

            $('#sidebar-menu li').click(function () {
                if ($(this).is('.active')) {
                    $(this).removeClass('active');
                    $('ul', this).slideUp();
                    $(this).removeClass('nv');
                    $(this).addClass('vn');
                } else {
                    $('#sidebar-menu li ul').slideUp();
                    $(this).removeClass('vn');
                    $(this).addClass('nv');
                    $('ul', this).slideDown();
                    $('#sidebar-menu li').removeClass('active');
                    $(this).addClass('active');
                }
            });

            $('#menu_toggle').click(function () {
                if ($('body').hasClass('nav-md')) {
                    $('body').removeClass('nav-md');
                    $('body').addClass('nav-sm');
                    $('.left_col').removeClass('scroll-view');
                    $('.left_col').removeAttr('style');
                    $('.sidebar-footer').hide();

                    if ($('#sidebar-menu li').hasClass('active')) {
                        $('#sidebar-menu li.active').addClass('active-sm');
                        $('#sidebar-menu li.active').removeClass('active');
                    }
                } else {
                    $('body').removeClass('nav-sm');
                    $('body').addClass('nav-md');
                    $('.sidebar-footer').show();

                    if ($('#sidebar-menu li').hasClass('active-sm')) {
                        $('#sidebar-menu li.active-sm').addClass('active');
                        $('#sidebar-menu li.active-sm').removeClass('active-sm');
                    }
                }
            });
        });
    });
    function go_menu(file) {
        $.ajax({
            url: "<?php echo site_url()?>/"+file,
            cache: false
        }).done(function (data) {
            $('#main_content').html(data);
        });
    }
    function logout() {
        $.ajax({
            url: "<?php echo site_url("login/do_logout")?>",
            cache: false
        }).done(function (data) {
            location.reload();
        });
    }
</script>
</body>
</html>

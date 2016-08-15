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
<body style="background:#F7F7F7;">
    <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form onsubmit="do_login();return false">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" id="username" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="password" id="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <input type="submit" style="display:none" />
                        <a class="btn btn-primary submit" onclick="do_login()">Log in</a>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1>Travelgo</h1>
                            <p>Support :  <img src="<?php echo base_url("assets")?>/css/ie.png" /> 9+,<img src="<?php echo base_url("assets")?>/css/firefox.png" />  40+,  <img src="<?php echo base_url("assets")?>/css/Chrome.png" />30+</p>
                            <p>©2016 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>
</div>
<script>
    function do_login() {
        var username = $("#username").val();
        var password = $("#password").val();
        $(".btn.btn-primary.submit").html('<i class="fa fa-circle-o-notch fa-spin"></i> Checking . . . ');
        $(".btn").attr("disabled", true);
        $.ajax({
            method: "POST",
            url: "<?php echo site_url("login/do_login");?>",
            data: { username: username, password: password }
        }).done(function (msg) {
            var data = eval('(' + msg + ')');
            if (data.status == 1) {
                location = "<?php echo base_url()?>";
            } else {
                $(".btn.btn-primary.submit").html('Login');
                $(".btn").attr("disabled", false);
                new PNotify({
                    title: 'Error!',
                    text: data.msg,
                    type: 'error'
                });
            }
        });
    }
</script>
</body>
</html>

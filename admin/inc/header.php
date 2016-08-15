<!-- Load Bootstaps Start -->

<link href="dist/css/bootstrap.css" rel="stylesheet" />

<script src="dist/js/bootstrap.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<!-- Load Bootstaps End -->
<link href="css/table.css" rel="stylesheet" />
<link href="css/table-one.css" rel="stylesheet" />
<!-- Hack IE -->
<script src='hack-IE/dist/html5shiv.js'></script>
<script src='hack-IE/src/html5shiv.js'></script>
<!-- Hack IE-->
<script type="text/javascript" src="js/tinymce/tiny_mce.js"></script>
<script type="text/javascript">

		tinyMCE.init({
        // General options
        mode : "specific_textareas",
		editor_deselector : "mceNoEditor",
        theme : "advanced",
		
		plugins : "jbimages,autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontsizeselect,formatselect,|,cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,undo,redo",
        theme_advanced_buttons2 : "sub,sup,|,hr,link,unlink,anchor,jbimages,cleanup,|,forecolor,backcolor,|,tablecontrols,|,help,code",
                           
                            theme_advanced_toolbar_location : "top",
                            theme_advanced_toolbar_align : "left",
                            theme_advanced_statusbar_location : "bottom",
                            theme_advanced_resizing : true,
							
							relative_urls: false,
        });
</script>
<style>
.alert{font:"Times New Roman", Times, serif; font-size:small;}
.list{font-family:"Times New Roman", Times, serif; font-size:medium; text-decoration:none; color:#004d9f}
.space{margin:10px;}
</style>
</head>
<body>	
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://websolutionindonesia.com/client/web/kristaltour2/"><img src="images/img-logo-kristal-tour.png" /></a>
        </div>
        <div class="collapse navbar-collapse navbar-right" align="right">
          <ul class="nav navbar-nav" align="right">
            <li align="right" ><a class="act-btn" href="change-password.php">Change Password</a></li>
            <li align="right" ><a class="act-btn" href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
<link href="css/nav-bar.css" rel="stylesheet" />
<script type="text/javascript" src="js/js_nav_multi/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/js_nav_multi/scriptbreaker-multiple-accordion-1.js"></script>
<script language="JavaScript">

$(document).ready(function() {
	$(".topnav").accordion({
		accordion:false,
		speed: 300,
		closedSign: '[+]',
		openedSign: '[-]'
	});
});

</script>
<ul class="topnav">
	<li><a href="welcome-admin.php"><label>DASHBOARD</label></a></li>
   <!-- <li><a href="about-us.php"><label>About Us</label></a></li> -->
     <li><a href="#"><label>Tips</label></a>
     	<ul>
        	<li class=""><a href="list-tips.php">List Tips</a></li>
            <li class=""><a href="add-new-tips.php">Add Tips</a></li>
        </ul>
     </li>
    <li><a href="#"><label>News</label></a>
     	<ul>
        	<li class=""><a href="list-news.php">List News</a></li>
            <li class=""><a href="add-new-news.php">Add New News</a></li>
        </ul>
    </li>
    <li><a href="#"><label>Tour</label></a>
		<ul>
			 <li class=""><a href="list-tour.php">List Tour</a></li>
			 <li><a href="add-new-tour.php">Add New Tour</a></li>
		</ul>
	</li>
    <li><a href="airlines-hotels.php"><label>Airlines & Hotels</label></a></li>
    <li><a href="#"><label>Document Handling</label></a>
		<ul>
			 <li class=""><a href="list-dInformation.php">List Document Information</a></li>
			 <li><a href="add-new-document.php">Add New Document Information</a></li>
		</ul>
	</li>
    <li><a href="base-address.php"><label>Office Address</label></a></li>
	<li><a href="#"><label>Setting</label></a>	
    	<ul>
        	<li class=""><a href="contact-us.php">Contact Us</a></li>
            <li><a href="list-users.php">Users</a></li>
        </ul>
    </li>	
</ul>
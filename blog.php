<? 	session_start(); 
	$_SESSION['titre'] = "Blog (Fil Info): les informations récentes du club: Brest Bretagne Handball - Pôle Formation";

	if (isset($_GET['blog']))
	{
		$_SESSION['blog'] = $_GET['blog'];
	}
	else
	{
	   $_SESSION['blog'] = "/blog/index.php";
	}

	include("header.php");
?>
	<!-- Dans le Head -->
		<!--script>
			function actu_iframe(){
			if(navigator.appName=="Microsoft Internet Explorer" ){
			 if(document.all){ document.all.id_iframe.style.height = document.frames("id_iframe" ).document.body.scrollHeight;}
			 else {document.getElementById("id_iframe" ).style.height = document.getElementById("id_iframe" ).contentDocument.body.scrollHeight+ 30;}
			 }
			else{
			 document.getElementById("id_iframe" ).style.height = document.getElementById("id_iframe" ).contentDocument.body.offsetHeight+ 30 +"px";
			 }
			}
		</script-->

			<!-- Main -->
				<!-- section id="main" class="container"-->
				<section id="main">
					<header>
						<h2>Fil Info</h2>
						<p><span class="icon fa-edit accent2"></span>
							Blog du club: Evènements importants, soirées, matchs importants, etc...
						</p>
					</header>
					<section>
						<iframe id="mon_iframe" name="FilInfo"  src="<?php echo $_SESSION['blog'] ?>" class="autoHeight" width="100%" style="min-height: 1000px;"></iframe>
					</section>
				</section>

<?php include("footer.php"); ?>
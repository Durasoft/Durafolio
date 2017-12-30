<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	    <title>Durafolio Template</title>

	    <meta name="description" content="Durasoft's Durafolio template is a new way to show off yourself.">
	    <meta name="keywords" content="Durasoft, Durasoftware, software, web applications, mobile apps, backend, frontend design, durofolio, potfolio, porfolio theme">
	    <meta name="author" content="Durasoft Software">

	    <meta name="robots" content="index, follow">
	    <meta name="mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="default">

	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:700"/>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />
	    <link rel="stylesheet" href="https://dist.durasoftware.com/CSS/font-awesome.min.css" />
	    <link rel="stylesheet" href="CSS/main.css" />

	    <meta property="fb:page_id" content="">
	    <meta property="og:title" content="Durafolio">
	    <meta property="og:image" content="">
	    <meta property="og:description" content="Durasoft's Durafolio template is a new way to show off yourself.">
	    <meta property="og:url" content="https://durasoftware.com">
	    <meta property="og:site_name" content="Durasoftware > Durafolio">
	    <meta property="og:type" content="website">

	    <meta name="twitter:card" content="summary">
	    <meta name="twitter:url" content="">
	    <meta name="twitter:title" content="">
	    <meta name="twitter:description" content="">
	    <meta name="twitter:image" content="">
	    <meta name="twitter:site" content="">
	</head>
	<body>
		<div id="container">
			<div id="left-bar">
				<img class="photo" src="IMG/robot.png">
				<a href="#" class="toggle"><i id="chevron" class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></a>
				<div class="navlist">
					<ul>
					  	<li><a href="#hakkimda">Hakkımda</a></li>
					  	<li><a href="#al">Beni satın al</a></li>
					  	<li><a href="#temalar">Diğer Temalar</a></li>
					</ul>
				</div>
				<a href="https://durasoftware.com" class="copyright">Durasoft&copy; Yazılım - Durafolio&copy;</a>
			</div>
			<div id="content">
				<div class="header">
					<h1 class="logo">Ben <span class="underline"><b>Durabot'um</b></span>.</h1>
					<br>
					<p>Yapay zeka, yazılım seven, arkadaş canlısı, sevecen...</p>
				</div>

				<p class="bio">
					Biz robotlar genelde hep aynıyız, nitekim ben de öyleyim, fakat farkım diğer tüm robotlardan daha yaratıcı ve efektif fikirlere sahip olmam! Hobim web siteleri yazıp insanlara kullanıcı dostu ara-birimler oluşturmak. Bu sayede benim dilimi- robotların dilini her insan anlayabiliyor!
				</p>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> 
		<script>
			var toggleStatus = false;
			$(".toggle").click(function(){
				if (toggleStatus){
					$("#left-bar").removeClass("active-bar");
					$(".logo").removeClass("active-logo");
					$(".navlist").removeClass("active-bar-navlist");
			    	$("#content").removeClass("active-bar-content");
			    	$("#chevron").removeClass("fa-chevron-left").addClass("fa-chevron-right");
				}
				else {
					$("#left-bar").addClass("active-bar");
					$(".navlist").addClass("active-bar-navlist");
					$(".logo").addClass("active-logo");
			    	$("#content").addClass("active-bar-content");
			    	$("#chevron").removeClass("fa-chevron-right").addClass("fa-chevron-left");
				}
				toggleStatus = !toggleStatus;
			});
		</script>
	</body>
</html>

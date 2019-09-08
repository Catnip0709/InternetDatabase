
<!DOCTYPE html>
<html>
<head>
		<title>Home</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/others.css" rel="stylesheet" type="text/css" media="all" />

		<!-- js -->

		<!-- //js -->
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Gaiety Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- banner -->
	<div id="home" class="banner">
	<div class="container">
		<div class="navi">
				<div class="head-logo">
					<a href=""><img src="images/logo.png" alt=" "></a>
				</div>
				<div class="main-in">
					<section>
						<button id="showLeft" class="navig"></button>
					</section>
				</div>
				<!--- Navigation from Right To Left --->
				<link rel="stylesheet" type="text/css" href="css/component.css" />
					<script src="js/modernizr.custom.js"></script>

					<div class="cbp-spmenu-push">
						<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
							<h3>Menu</h3>
							<a href="#home" class="scroll">top</a>
							<a href="#portfolio" class="scroll">Videos</a>
							<a href="#about" class="scroll">Matches</a>
							<a href="#contact" class="scroll">bottom</a>
		
						</nav>
				</div>
				<script src="js/classie.js"></script>
					<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),				
				showLeft = document.getElementById( 'showLeft' ),				
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
		</script>
				<!--- Navigation from Right To Left --->
				<div class="clearfix"> </div>
		</div>

	</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
	<div class="container">
		<div class="banner-bottom-left">
			<p>
            France crowned world champions after 20 years
          </p>
		</div>

		<div class="clearfix"> </div>
	</div>
	</div>
	<div class="banner-bottom-text-fig">
	
	<div class="begin">
	  <div class="news-top">
	  
	  <a href="https://www.fifa.com/worldcup/news/"><span class="h2">News</span></a> 
	  </div>
		<a href="https://www.fifa.com/worldcup/news/hyundai-goal-of-the-tournament"><img src="images/news1 .jpg"></a>
   	<a href="https://www.fifa.com/worldcup/news/from-russia-2018-to-qatar-2022-2986026"><img src="images/news3.jpg"></a>
    <a href="https://www.fifa.com/worldcup/news/157-awards-piece-2986294"><img src="images/news2.jpg"></a> 
	<a href="https://www.fifa.com/worldcup/news/modric-croatia-can-be-proud"><img src="images/news4.jpg"></a>
     <a href="https://www.fifa.com/worldcup/photos/galleries/france-national-team-celebrations"><img src="images/news5.jpg"></a>
	    
	     <div class="news-bottom"><span>Vote for Goal of the Tournament</span></div>
	     <div class="news-bottom"><span>From Russia 2018 to Qatar 2022</span></div>
	     <div class="news-bottom"><span>Golden consolation for magical Modric</span></div>
	     <div class="news-bottom"><span>Modric: Croatia can be proud</span></div>
	     <div class="news-bottom"><span>France celebrate with the Trophy</span></div>
	     
		</div>

	</div>
	<script type="text/javascript">
	  $(function(){//设置图片宽高永远相等
		  var a=document.getElementsByClassName("begin");
		  for(var i=3;i<12;i=i+2)
		  {
			 console.log(i);
		     a[0].childNodes[i].childNodes[0].style.height=a[0].childNodes[i].childNodes[0].width+"px";
	      }
	  })
	  $(window).resize(function(){
		  var a=document.getElementsByClassName("begin");
		  for(var i=3;i<12;i=i+2)
		  {
			 console.log(i);
		     a[0].childNodes[i].childNodes[0].style.height=a[0].childNodes[i].childNodes[0].width+"px";
	      }
	  })
	</script>
<!-- //banner-bottom -->
<!-- video -->
<div class="clearfix"></div>
	<div class="teams">
	  <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-teams"><span class="h2">Teams</span></a>
     <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=ARGENTINA"><img src="images/cut/1.png" class="t1"></a> 
      <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=AUSTRALIA"><img src="images/cut/2.png" class="t1"></a>
     <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=BELGIUM"><img src="images/cut/3.png" class="t1"></a> 
      <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=BRAZIL"><img src="images/cut/4.png" class="t1"></a>
      <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=COLOMBIA"><img src="images/cut/5.png" class="t1"></a>
      <a href="http://localhost/advanced/frontend/web/index.php?r=site/show-players&nation=COSTA%20RICA"><img src="images/cut/6.png" class="t1"></a>
      <div class="clearfix"></div>
    <a href=""><span class="h4 t3" id="moreteams">more teams>> </span></a>  
	</div>
	<script type="text/javascript">
		$("#moreteams").click(function(){window.open("http://localhost/advanced/frontend/web/index.php?r=site/show-teams");})
	</script>
<!-- //video -->
<!-- portfolio -->
	<div class="portfolio" id="portfolio">
	<div class="container">
		<!-- Portfolio Starts Here -->
	<div class="portfolios entertain_box  wow fadeInUp" data-wow-delay="0.4s" id="project">
			<div class="portfolio-info">
				<h3>Videos</h3>
				<p class="paragraph">SEE THE BEST WORK TOGETHER</p>
				<div class="fig3">
					<span> </span>
				</div>
				<p class="paragraph1">Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
					<span>nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.Proin
					eget tortor risus.</span>Nulla porttitor accumsan tincidunt.</p>
				<div class="strip"> </div>
			</div>
					<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="app card icon web">LATEST VIDEOS</span></li>
							<li><span class="filter" data-filter="app">MATCH HIGHLIGHTS</span></li>
							<li><span class="filter" data-filter="card">ALL GOALS</span></li>
							<li><span class="filter" data-filter="icon">INTERNATIONAL SIGN</span></li>
					</ul>
		
					<div id="portfoliolist">
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/russia-2018-an-unforgettable-world-cup" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v1.png" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
									
								</h2>
								</div></a>
										<div class="video-bottom">
									<span>Russia 2018 - An Unforgettable World Cup</span>
								</div>	
							</div>
						</div>				
						<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/france-4-2-croatia-isl" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v2.png" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
									
									</h2>
								</div></a>
										<div class="video-bottom">
									<span>France 4-2 Croatia (ISL)</span>
								</div>	
							</div>
						</div>		
						<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/post-match-press-conference-france-4-2-croatia" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v3.png" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								
								</h2>
								</div></a>
										<div class="video-bottom">
									<span>Post-match press conference: France 4-2 Croatia</span>
								</div>	
							</div>
						</div>				
						<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/mario-mandzukic-goal-france-croatia" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v4.png" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
								
								</h2>					
								</div></a>
										<div class="video-bottom">
									<span>Mario Mandzukic Goal (France-Croatia)</span>
								</div>	
							</div>
						</div>	
						<div class="portfolio web mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/kylian-mbappe-goal-france-croatia" class="b-link-stripe b-animate-go   swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v5.png" />
								<div class="b-wrapper">
								<h2 class="b-animate b-from-left    b-delay03 ">
						
								</h2>						
								</div></a>
										<div class="video-bottom">
									<span>Kylian Mbappe Goal (France-Croatia)</span>
								</div>	
							</div>
						</div>			
						<div class="portfolio web mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="https://www.fifa.com/worldcup/videos/ivan-perisic-goal-france-croatia" class="b-link-stripe b-animate-go  swipebox"  title="">
								<img class="img-responsive" src="images/LATEST VIDEOS/v6.png" />
								<div class="b-wrapper">
									<h2 class="b-animate b-from-left    b-delay03 ">
										
									</h2>					
								</div></a>	
								<div class="video-bottom">
									<span>Ivan Perisic Goal (France-Croatia))</span>
								</div>						
							</div>
						</div>
					<div class="clearfix"></div>
					</div>
		
	</div>

				<!-- Portfolio Ends Here -->

					<script type="text/javascript">
                       $(function(){
						   $("#filters li").click(function(){
							   var a=$(this).text();
							   for(var i=1;i<=6;i++)
								   {
									   $(".portfolio img")[i-1].src="images/"+a+'/'+'v'+i+".png";
									   if(a==="LATEST VIDEOS")
										   {
											   $(".video-bottom")[0].childNodes[1].innerHTML="Russia 2018 - An Unforgettable World Cup";
											   $(".video-bottom")[1].childNodes[1].innerHTML="France 4-2 Croatia (ISL)";
											   $(".video-bottom")[2].childNodes[1].innerHTML="Post-match press conference: France 4-2 Croatia";
											   $(".video-bottom")[3].childNodes[1].innerHTML="Mario Mandzukic Goal (France-Croatia)";
											   $(".video-bottom")[4].childNodes[1].innerHTML="Kylian Mbappe Goal (France-Croatia)";
											   $(".video-bottom")[5].childNodes[1].innerHTML="Ivan Perisic Goal (France-Croatia)";
										   }
									   if(a==="MATCH HIGHLIGHTS")
										   {
											   $(".video-bottom")[0].childNodes[1].innerHTML="France 4-2 Croatia (Russia 2018)";
											$(".video-bottom")[1].childNodes[1].innerHTML="Belgium 2-0 England (Russia 2018)";
												 $(".video-bottom")[2].childNodes[1].innerHTML="Croatia 2-1 (AET) England (Russia 2018)";
												 $(".video-bottom")[3].childNodes[1].innerHTML="France 1-0 Belgium (Russia 2018)";
												 $(".video-bottom")[4].childNodes[1].innerHTML="Sweden 0-2 England (Russia 2018)";
												 $(".video-bottom")[5].childNodes[1].innerHTML="Russia 2-2 (3-4 PSO) Croatia (Russia 2018)";
										   }
									   if(a==="ALL GOALS")
										   {
											         $(".video-bottom")[0].childNodes[1].innerHTML="Mario Mandzukic Goal (France-Croatia)";
													 $(".video-bottom")[1].childNodes[1].innerHTML="Kylian Mbappe Goal (France-Croatia)"
													 $(".video-bottom")[2].childNodes[1].innerHTML="Paul Pogba Goal (France-Croatia)";
													 $(".video-bottom")[3].childNodes[1].innerHTML="Antoine Griezmann Goal (France-Croatia)";
													 $(".video-bottom")[4].childNodes[1].innerHTML="Ivan Perisic Goal (France-Croatia)";
													 $(".video-bottom")[5].childNodes[1].innerHTML="Mario Mandzukic own-goal (France-Croatia)";
										   }
									   if(a==="INTERNATIONAL SIGN")
										   {
											   $(".video-bottom")[0].childNodes[1].innerHTML="France 4-2 Croatia (ISL)";
													 $(".video-bottom")[1].childNodes[1].innerHTML="Belgium 2-0 England (ISL)"
													 $(".video-bottom")[2].childNodes[1].innerHTML="Croatia 2-1 (AET) England (ISL)";
													 $(".video-bottom")[3].childNodes[1].innerHTML="France 1-0 Belgium (ISL)";
													 $(".video-bottom")[4].childNodes[1].innerHTML="Russia 2-2 (3-4 PSO) Croatia (ISL)";
													 $(".video-bottom")[5].childNodes[1].innerHTML="Sweden 0-2 England (ISL)";
										   }
								   }
						   })
					   })
					</script>
	</div>

<!-- //portfolio -->
<!-- portfolio-bottom -->
	<div class="portfolio-bottom" id="portfolio-bottom">
   <img src="images/back.jpg" style="margin: 0 auto">
    <script type="text/javascript">
		$("#portfolio-bottom img").click(function(){window.open("https://www.wanda-group.com/html/special/")});
		
	</script>
	</div>
<!-- //portfolio-bottom -->
<!-- about -->
	<div class="about" id="about">
	<div class="container">
		<div class="portfolio-info">
			<h3>MATCHES</h3>

			<div class="fig3">
				<span> </span>
			</div>
			<p class="paragraph1">Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
				<span>nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.Proin
					eget tortor risus.</span>Nulla porttitor accumsan tincidunt.</p>
		</div>
	
		<div class="about-grids-bottom">
			<div class="about-us">
				<a href="http://localhost/advanced/frontend/web/index.php?r=site/show-matches"><h4>ALL</h4></a>
				<p>这里是所有的比赛信息<img src="images/b1.jpg"></p>
			</div>
			<div class="about-us about-us-mid">
				<a href="http://localhost/advanced/frontend/web/index.php?r=site/show-group"><h4>Group competition</h4></a>
				<p>这里是所有的小组赛<img src="images/b2.jpg"></p>
			</div>
			<div class="about-us">
				<a href="http://localhost/advanced/frontend/web/index.php?r=site/show-out"><h4>Knockout</h4></a>
				<p>这里是所有的淘汰赛<img src="images/b3.jpg"></p>
			</div>
		
		</div>
	</div>
	</div>

<!-- //about -->
<!-- contact -->

<!-- //contact -->
<!-- footer -->
<div class="team-bottom" ></div>
	<div class="footer" id="contact">
	<div class="container">
		<div class="footer-icons">
			<ul>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
				<li><a href="#" class="dribble"> </a></li>
				<li><a href="#" class="g-plus"> </a></li>
			</ul>
		</div>
		<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
	</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
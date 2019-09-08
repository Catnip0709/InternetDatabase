<!doctype html>
<html>
<!--我是所有球员界面-->
<head>
<meta charset="utf-8">
<title>players</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/others.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
</head>

<body>
<div class="top-header main-con">
	<span>Team</span>
</div>
<div class="header">
  <div class="main-con">
  	<img src="images/logo.png" class="fl">
  	<p class="h2">2018 FIFA World Cup Russia</p>
  	<div class="tags">
  	</div>
  	 	<div class="right-icon">
  		<img src="images/icon.png" class="fr"></div>
  </div>

</div>

<div class="team-header">
    <div class="main-con">
    	<img src="#" class="icon-l" id="icon-1">
    	<script type="text/javascript">
	         $(function(){  //加载小国旗，从FIFA官网
				 var text=$("#nation").text();
				 var text1;
				 switch (text)
					 {
						 case "COSTA RICA":text1="crc";break;
						 case"ICELAND":text1="isl";break;
						 case"IR IRAN":text1="irn";break;
						 case"JAPAN":text1="jpn";break;
						 case"MOROCCO":text1="mar";break;
						case "NIGERIA":text1="nga";break;
						 case"SAUDI ARABIA":text1="ksa";break;
						 case"SERBIA":text1="srb";break;
						 case"SPAIN":text1="esp";break;
						 case"SWITZERLAND":text1="sui";break;
						 default:
							 text1=$("#nation").text().slice(0,3).toLowerCase();
					 }
				 $("#icon-1").attr("src","https://api.fifa.com/api/v1/picture/flags-fwc2018-4/"+text1)
			 });
	
         </script>
    	<span id="nation"><?=$nation;?></span>
    	<img src="#" class="fr icon-2" id="icon-2">
    	<script type="text/javascript">
		 $(function(){
			 	 var text=$("#nation").text();
				 var text1;
				 switch (text)
					 {
						 case "COSTA RICA":text1="CRC";break;
						 case"ICELAND":text1="ISL";break;
						 case"IR IRAN":text1="IRN";break;
						 case"JAPAN":text1="JPN";break;
						 case"MOROCCO":text1="MAR";break;
						case "NIGERIA":text1="NGA";break;
						 case"SAUDI ARABIA":text1="KSA";break;
						 case"SERBIA":text1="SRB";break;
						 case"SPAIN":text1="ESP";break;
						 case"SWITZERLAND":text1="SUI";break;
						 default:
							 text1=$("#nation").text().slice(0,3);
					 }
			 $("#icon-2").attr("src","https://api.fifa.com/api/v1/picture/associations-sq-2/"+text1);
		 });
		</script>
    </div>	
  </div>  
<div class="main-con">
<span class="h2 top-title">Players</span>
<div class="line-player">
	<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[0]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[0]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[0]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[1]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[1]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[1]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[2]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[2]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[2]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[3]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[3]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[3]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[4]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[4]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[4]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[5]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[5]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[5]['player_age'];?></span>
	</div>
</div>
<div class="line-player">
	<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[6]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[6]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[6]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[7]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[7]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[7]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[8]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[8]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[8]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[9]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[9]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[9]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[10]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[10]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[10]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[11]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[11]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[11]['player_age'];?></span>
	</div>
</div>
<div class="line-player">
	<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[12]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[12]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[12]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[13]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[13]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[13]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[14]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[14]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[14]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[15]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[15]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[15]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[16]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[16]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[16]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[17]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[17]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[17]['player_age'];?></span>
	</div>
</div>
<div class="line-player">
	<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[18]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[18]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[18]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[19]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[19]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[19]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[20]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[20]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[20]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[21]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[21]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[21]['player_age'];?></span>
	</div>
		<div class="player">
		<img src="#">
		<span name="player-name"><?=$result[22]['player_Name'];?></span>
		<span name="player-id">Number:<?=$result[22]['player_Number'];?></span>
		<span name="player-age">age:<?=$result[22]['player_age'];?></span>
	</div>
		<div class="player" id="coach">
		<img src="#">
		<span id="coach-name"><?=$coach[0]['Team_Coach'];?></span>
		<span >coach</span>
		<span name="coach-age"><?=$coach[0]['Coach_Age'];?></span>
	</div>
</div>
</div>	
	<div class="clearfix"></div>
	<script type="text/javascript">
	$(function(){
	   var x=document.getElementsByClassName("player");
	   for(var i=0;i<x.length;i++)
		   {
			   var a1=document.getElementsByName("player-name");
			   var a2=document.getElementsByName("player-id");
			   x[i].childNodes[1].src="images/players/"+a1[i].innerText+a2[i].innerText.split(":")[1]+".png";
		   }
		
	})
	$("#coach img")[0].src="images/coaches/"+$("#coach-name")[0].innerText+".png";
</script>
<div class="main-con">
	<span class="h2 top-title">Matches</span>
	<div class="matches">
		<div class="left-info">
			<span><?=$result_match[0]['Competition_Time'];?></span>
			<span><?=$result_match[0]['Competition_Court'];?></span>
			<span><?=$result_match[0]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[0]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[0]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span><strong><?=$result_match[0]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[0]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[0]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="matches">
		<div class="left-info">
			<span><?=$result_match[1]['Competition_Time'];?></span>
			<span><?=$result_match[1]['Competition_Court'];?></span>
			<span><?=$result_match[1]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[1]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[1]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span><strong><?=$result_match[1]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[1]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[1]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="matches">
		<div class="left-info">
			<span><?=$result_match[2]['Competition_Time'];?></span>
			<span><?=$result_match[2]['Competition_Court'];?></span>
			<span><?=$result_match[2]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[2]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[2]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span><strong><?=$result_match[2]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[2]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[2]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="matches">
		<div class="left-info">
			<span><?=$result_match[3]['Competition_Time'];?></span>
			<span><?=$result_match[3]['Competition_Court'];?></span>
			<span><?=$result_match[3]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[3]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[3]['Competition_TeamA'];?></span>
			</div>
			<img src="  #">
			<span><strong><?=$result_match[3]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[3]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[3]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
<div class="matches">
		<div class="left-info">
			<span><?=$result_match[4]['Competition_Time'];?></span>
			<span><?=$result_match[4]['Competition_Court'];?></span>
			<span><?=$result_match[4]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[4]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[4]['Competition_TeamA'];?></span>
			</div>
			<img src="  #">
			<span><strong><?=$result_match[4]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[4]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[4]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="matches">
		<div class="left-info">
		
			<span><?=$result_match[5]['Competition_Time'];?></span>
			<span><?=$result_match[5]['Competition_Court'];?></span>
			<span><?=$result_match[5]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[5]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[5]['Competition_TeamA'];?></span>
			</div>
			<img src="  #">
			<span><strong><?=$result_match[5]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[5]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[5]['Competition_TeamB'];?></span>
		
		</div>	
		<div class="clearfix"></div>
	</div>

<div class="matches">
		<div class="left-info">
			<span><?=$result_match[6]['Competition_Time'];?></span>
			<span><?=$result_match[6]['Competition_Court'];?></span>
			<span><?=$result_match[6]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[6]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[6]['Competition_TeamA'];?></span>
			</div>
			<img src="  #">
			<span><strong><?=$result_match[6]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[6]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[6]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
<div class="matches">
		<div class="left-info">
			<span><?=$result_match[7]['Competition_Time'];?></span>
			<span><?=$result_match[7]['Competition_Court'];?></span>
			<span><?=$result_match[7]['competitionCourt']['court_Position'];?></span>
			<span>解说：<?=$result_match[7]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span><?=$result_match[7]['Competition_TeamA'];?></span>
			</div>
			<img src="  #">
			<span><strong><?=$result_match[7]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span><strong><?=$result_match[7]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span><?=$result_match[7]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	
</div>
<script type="text/javascript">
	function loadd(){
	   for(var i=0;i<8;i++)
			{	 var text=$(".competation")[i].childNodes[1].innerText;
				 var text1;
			 text=text.toUpperCase();
				 switch (text)
					 {
						 case "COSTA RICA":text1="crc";break;
						 case"ICELAND":text1="isl";break;
						 case"IR IRAN":text1="irn";break;
						 case"JAPAN":text1="jpn";break;
						 case"MOROCCO":text1="mar";break;
						case "NIGERIA":text1="nga";break;
						 case"SAUDI ARABIA":text1="ksa";break;
						 case"SERBIA":text1="srb";break;
						 case"SPAIN":text1="esp";break;
						 case"SWITZERLAND":text1="sui";break;
						 default:
							 text1=text.slice(0,3).toLowerCase();
					 }
			 $(".competation")[i].childNodes[3].src="https://api.fifa.com/api/v1/picture/flags-fwc2018-4/"+text1;
			 text=$(".competation")[i].childNodes[13].innerHTML;
			 text=text.toUpperCase();
			  switch (text)
					 {
						 case "COSTA RICA":text1="crc";break;
						 case"ICELAND":text1="isl";break;
						 case"IR IRAN":text1="irn";break;
						 case"JAPAN":text1="jpn";break;
						 case"MOROCCO":text1="mar";break;
						case "NIGERIA":text1="nga";break;
						 case"SAUDI ARABIA":text1="ksa";break;
						 case"SERBIA":text1="srb";break;
						 case"SPAIN":text1="esp";break;
						 case"SWITZERLAND":text1="sui";break;
						 default:
							 text1=text.slice(0,3).toLowerCase();
					 }
			 $(".competation")[i].childNodes[11].src="https://api.fifa.com/api/v1/picture/flags-fwc2018-4/"+text1;
			}
	}
	
		
	
	
	function noned(){
		for(var i=0;i<8;i++)
			{
				if($(".right-A span")[i].innerHTML==="null")
					$(".matches")[i].style.display="none";
			}
	}

	noned();
	loadd(); 
</script>
<div class="main-con" id="nation-news">
<span class="h2 top-title">NEWS</span>
<div class="clearfix"></div>
<div class="news">
    <img src="images/news/1.jpg">
	<a href="<?=$news[0]['News_Link'];?>"><?=$news[0]['News_Title'];?></a>
	<span class="video-time">(<?=$news[0]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/2.jpg">
	<a href="<?=$news[1]['News_Link'];?>"><?=$news[1]['News_Title'];?></a>
	<span class="video-time">(<?=$news[1]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/3.jpg">
	<a href="<?=$news[2]['News_Link'];?>"><?=$news[2]['News_Title'];?></a>
	<span class="video-time">(<?=$news[2]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/4.jpg">
	<a href="<?=$news[3]['News_Link'];?>"><?=$news[3]['News_Title'];?></a>
	<span class="video-time">(<?=$news[3]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/5.jpg">
	<a href="<?=$news[4]['News_Link'];?>"><?=$news[4]['News_Title'];?></a>
	<span class="video-time">(<?=$news[4]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/6.jpg">
	<a href="<?=$news[5]['News_Link'];?>"><?=$news[5]['News_Title'];?></a>
	<span class="video-time">(<?=$news[5]['News_Time'];?>)</span>
</div>
	<div class="news">
    <img src="images/news/7.jpg">
	<a href="<?=$news[6]['News_Link'];?>"><?=$news[6]['News_Title'];?></a>
	<span class="video-time">(<?=$news[6]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/8.jpg">
	<a href="<?=$news[7]['News_Link'];?>"><?=$news[7]['News_Title'];?></a>
	<span class="video-time">(<?=$news[7]['News_Time'];?>)</span>
</div>
<div class="clearfix"></div>
<div class="news">
    <img src="images/news/9.jpg">
	<a href="<?=$news[8]['News_Link'];?>"><?=$news[8]['News_Title'];?></a>
	<span class="video-time">(<?=$news[8]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/10.jpg">
	<a href="<?=$news[9]['News_Link'];?>"><?=$news[9]['News_Title'];?></a>
	<span class="video-time">(<?=$news[9]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/11.jpg">
	<a href="<?=$news[10]['News_Link'];?>"><?=$news[10]['News_Title'];?></a>
	<span class="video-time">(<?=$news[10]['News_Time'];?>)</span>
</div>
<div class="news">
    <img src="images/news/12.jpg">
	<a href="<?=$news[11]['News_Link'];?>"><?=$news[11]['News_Title'];?></a>
	<span class="video-time">(<?=$news[11]['News_Time'];?>)</span>
</div>

</div>
<div class="clearfix"></div>
<!--videos-->

	<div class="team-bottom"></div>
<div class="footer">
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

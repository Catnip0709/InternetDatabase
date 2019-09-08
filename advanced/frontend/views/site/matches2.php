<!doctype html>
<html>
<!--我是淘汰赛界面-->
<head>
<meta charset="utf-8">
<title>Teams</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/others.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.pagination.css" />
<script type="text/javascript" src="js/jquery.pagination.min.js"></script>
</head>

<body>
<div class="top-header main-con">
	<span>Matches</span>
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


<div class="main-con">
<span class="h2 top-title" style="margin-bottom: 20px">Matches</span>
	
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[0]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[0]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[0]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[0]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[0]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[0]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[0]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[0]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[1]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[1]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[1]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[1]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[1]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[1]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[1]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[1]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[2]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[2]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[2]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[2]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[2]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[2]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[2]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[2]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[3]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[3]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[3]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[3]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[3]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[3]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[3]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[3]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[4]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[4]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[4]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[4]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[4]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[4]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[4]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[4]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[5]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[5]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[5]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[5]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[5]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[5]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[5]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[5]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[6]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[6]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[6]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[6]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[6]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[6]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[6]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[6]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[7]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[7]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[7]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[7]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[7]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[7]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[7]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[7]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[8]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[8]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[8]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[8]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[8]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[8]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[8]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[8]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[9]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[9]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[9]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[9]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[9]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[9]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[9]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[9]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[10]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[10]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[10]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[10]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[10]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[10]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[10]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[10]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[11]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[11]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[11]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[11]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[11]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[11]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[11]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[11]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[12]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[12]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[12]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[12]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[12]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[12]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[12]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[12]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[13]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[13]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[13]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[13]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[13]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[13]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[13]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[13]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[14]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[14]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[14]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[14]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[14]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[14]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[14]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[14]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="matches">
		<div class="left-info">
			<span name="Competition_Time"><?=$result_match[15]['Competition_Time'];?></span>
			<span name="Competition_Court"><?=$result_match[15]['Competition_Court'];?></span>
			<span name="court_Position"><?=$result_match[15]['competitionCourt']['court_Position'];?></span>
			<span name="Competition_CCTV5">解说：<?=$result_match[15]['Competition_CCTV5'];?></span>
		</div>
		<span class="time">Full Time</span>
		<div class="competation">
		<div class="right-A">
			<span name="Competition_TeamA"><?=$result_match[15]['Competition_TeamA'];?></span>
		</div>
			<img src="  #">
			<span name="Competition_AScore"><strong><?=$result_match[15]['Competition_AScore'];?></strong></span>
			<span>---</span>
			<span name="Competition_BScore"><strong><?=$result_match[15]['Competition_BScore'];?></strong></span>
		    <img src="  #">
		    <span name="Competition_TeamB"><?=$result_match[15]['Competition_TeamB'];?></span>
		
		</div>
		<div class="clearfix"></div>
	</div>

</div>


<script type="text/javascript">

	function loadd(){
	   for(var i=0;i<16;i++)
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
	loadd();
	</script>

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
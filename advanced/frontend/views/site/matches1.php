<!doctype html>
<html>
<!--我是小组赛界面-->
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
<span class="h2 top-title" style="margin-bottom: 20px" id="top-title">Group A</span>
	
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


</div>
<script type="text/javascript">
	function loadd(){
	   for(var i=0;i<6;i++)
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
	<div class="box">
			<div id="pagination1" class="page fl"></div>
			<div class="info fl">
				<p>当前页数：<span id="current1">1</span></p>
			</div>
		</div>
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
		function load(){
				$("#pagination1").pagination({
					currentPage: 1,
					totalPage: 8,
					callback: function(current) {
						$("#current1").text(current);
						$.ajax(
						{
							type:"post",
							url:"http://localhost/advanced/frontend/web/index.php?r=site/show-groups",
							datatype:"json",
							data:{"page":current},
							success:function(data)
							{
								
								var data=JSON.parse(data);
								
							   	var a=document.getElementsByName("Competition_Time");
	                            var b=document.getElementsByName("Competition_Court");
	                            var c=document.getElementsByName("court_Position");
                             	var d=document.getElementsByName("Competition_CCTV5");
	                            var e=document.getElementsByName("Competition_TeamA");
	                            var f=document.getElementsByName("Competition_AScore");
	                            var g=document.getElementsByName("Competition_BScore");
	                            var h=document.getElementsByName("Competition_TeamB");
								for(var i=0;i<6;i++)
									{
									 a[i].innerHTML=data[i].Competition_Time;
									 b[i].innerHTML=data[i].Competition_Court;
									 c[i].innerHTML=data[i].competitionCourt.court_Position;
									 d[i].innerHTML="解说:"+data[i].Competition_CCTV5;
									 e[i].innerHTML=data[i].Competition_TeamA;
									 f[i].innerHTML="<strong>"+data[i].Competition_AScore+"</strong>";
									 g[i].innerHTML="<strong>"+data[i].Competition_BScore+"</strong>";
									 h[i].innerHTML=data[i].Competition_TeamB;
									}
								loadd();
								
								
								
							  
							},
							error:function(){alert('Sever Error');}
						})
						
							switch(current)
								{
									case 1:$("#top-title").html("Group A");break;
									case 2:$("#top-title").html("Group B");break;
									case 3:$("#top-title").html("Group C");break;
									case 4:$("#top-title").html("Group D");break;
									case 5:$("#top-title").html("Group E");break;
									case 6:$("#top-title").html("Group F");break;
									case 7:$("#top-title").html("Group G");break;
									case 8:$("#top-title").html("Group H");break;
								}
						
					}
				})
			
			
		}
    load();
	</script>
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
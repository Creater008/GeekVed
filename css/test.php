<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/interface.js"></script>
</head>
<div class="dock" id="dock">
  <div class="dock-container">
  <a class="dock-item" href="index.php"><img src="images/music.png" alt="music" /><span>Home</span></a> 
  <a class="dock-item" href="esol	.php"><img src="images/online.png" alt="video" /><span>Online Solutions</span></a> 
  <a class="dock-item" href="lib.php"><img src="images/video.png" alt="video" /><span>Library</span></a> 
  <a class="dock-item" href="robotics.php"><img src="images/history.png" alt="history" /><span>Robotics</span></a> 
  <a class="dock-item" href="contact.php"><img src="images/calendar.png" alt="calendar" /><span>Contact us</span></a> 
  <a class="dock-item" href="http://facebook.com/groups/GeekVed/"><img src="images/rss.png" alt="rss" /><span>RSS</span></a> 
</div>
</div>
<script type="text/javascript">
	
	$(document).ready(
		function()
		{
			$('#dock').Fisheye(
				{
					maxWidth: 50,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 40,
					proximity: 90,
					halign : 'center'
				}
			)
		}
	);

</script>

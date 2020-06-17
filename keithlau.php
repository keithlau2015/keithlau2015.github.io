<?php
session_start();
if(isset($_SESSION["view_counter"])){
	$_SESSION["view_counter"] = $_SESSION["view_counter"]+1;
}else{
	$_SESSION["view_counter"] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css"  href="MainStyle.css">
<title>Welcome</title></head>
<body>
<center>
<h1>WELCOME TO KEITHLAU WEBSITE</h1>
<hr>
<h3><b>About Me</b></h3>
<br>
<p>I'm from Hong Kong, studying <i class="fa fa-cogs"></i>	SOFTWARE ENGINEERING at TAIWAN<br>
<i class="fa fa-cloud"></i>My dream is to create my Game Company in Hong Kong<br>
Recently, I created a small workshop name "JATEK"<br> we are developing some indie games
</p><br>
<h5><p><b>Follow me</b></p></h5>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3"><a href="http://www.facebook.com/jianlang.liu1"><i class="fa fa-facebook-square"></i>	Facebook</a></div>
<div class="col-sm-3"><a href="http://www.instagram.com/keithlauqaqlll/"><i class="fa fa-instagram"></i>	Instagram</a></div>
<div class="col-sm-3"><a href="http://www.youtube.com/channel/UCRSJ6qMaAJnuVvgk6QA78bw/videos"><i class="fa fa-youtube"></i>	Youtube</a></div>
<div class="col-sm-3"><a href="https://github.com/keithlau2015"><i class="fa fa-github-square"></i>	Github</a></div>
</div>
</div>
<hr>
<div class="container-fluid">
<h3><b><i class="fa fa-folder-open-o"></i>	Category</b></h3>
<br>
<h4><p><b><i class="fa fa-files-o"></i>	Notes</b></p></h4><br>
<div class="row">
<div class="col-sm-3">
		<div class="card bg-light border-Grey mb-3" style="width: 20rem;">
				<div class="card-header"><h3>Programming</h3></div>
				<div class="card-body">
				  <p class="card-text">This page is about programming notes</p>
				  <a href="#" class="card-link"><a href="Programming.html"><i class="fa fa-file-text"></i>	About Programming</a></a>
				</div>
		</div>
</div>
<div class="col-sm-3">
		<div class="card bg-light border-Grey mb-3" style="width: 23rem;">
				<div class="card-header"><h3>Game Dev</h3></div>
				<div class="card-body">
				  <p class="card-text">This page is about Game Development notes</p>
				  <a href="#" class="card-link"><a href="Game_Development.html"><i class="fa fa-file-text"></i>	About Game Development</a></a>
				</div>
		</div>
</div>
<div class="col-sm-3">
	<div class="card bg-light border-Grey mb-3" style="width: 22rem;">
			<div class="card-header"><h3>Web Dev</h3></div>
			<div class="card-body">
			  <p class="card-text">This page is about Web Development notes</p>
			  <a href="#" class="card-link"><a href="Web_Development.html"><i class="fa fa-file-text"></i>	About Web Development</a></a>
			</div>
	</div>
</div>
<div class="col-sm-3">
		<div class="card bg-light border-Grey mb-3" style="width: 22rem;">
				<div class="card-header"><h3>Post Production</h3></div>
				<div class="card-body">
				  <p class="card-text">This page is about Post Production notes</p>
				  <a href="#" class="card-link"><a href="Post_Production.html"><i class="fa fa-file-text"></i>	About Post Production</a></a>
				</div>
		</div>
</div>
</div>
<br><br>
<h4><p><b><i class="fa fa-paperclip"></i>	Other</b></p></h4>
<div class="row">
	<div class="col-sm-3">
		<a href="Projects.html"><i class="fa fa-files-o"></i>	My Projects</a>
	</div>
	<div class="col-sm-3">
		<a href="DataBase.php"><i class="fa fa-database"></i>	(still in dev)Storage</a>
	</div>
	<div class="col-sm-3">
		<a href="Calculator"><i class="fa fa-calculator"></i>	Calculator</a>
	</div>
	<div class="col-sm-3">
		<a href="PaperScissorsRock.html"><i class="fa fa-rocket"></i>		Mini game</a>
	</div>
</div>
<br>
<hr>
<?php
echo "visited: " . $_SESSION["view_counter"];
?>
</center>
</body>
</html>

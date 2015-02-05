 Skip to content
This repository

    Explore
    Gist
    Blog
    Help

    guillaume-scherrer guillaume-scherrer

    1 

0

    1

guillaume-scherrer/chupil

Update index.php #1
Merged
guillaume-scherrer merged 1 commit into guillaume-scherrer:master from Baboh:patch-1 2 minutes ago
+52 −35 

Conversation 0
Commits 1

    Files changed 1

Showing
with 52 additions and 35 deletions.
87  static/index.php
@@ -6,33 +6,58 @@
<meta charset='utf-8'>
<style>
-	html{
+	html{
background-color: #352e2c;
margin: 0;
+	overflow-x: hidden;
}
-	/*#logo {
+	
+	
+	#top{
+	background-color: #352e2c;
width: 828px;
height: 243px;
margin: auto;
-	position: fixed;
-	top: 50%;
-	margin-top: 0px;
-	left: 50%;
-	margin-left: -414px;
-	}*/
-	.container{
-	margin-top: 243px;
-	}
-	#top{
-	background-color: #352e2c;
-	/*height: 25%;
-	width: 12%;*/
+	position: relative;
+	top: 50px;
}
+	
h1.text-center{
color: white;
}
+	.rowd{
+	position: absolute;
+	margin: auto;
+	width: 828px;
+	height: 243px;
+	}
+	.row div{
+	display: block;
+	
+	}
+	
+	#form{
+	position: relative;
+	top: 150px;
+	margin: auto;
+	width: 640px;
+	min-height: 300px;
+	height: auto;
+	}
+	.row{
+	margin: 0;
+	padding: 0;
+	}
+	*{
+	margin: 0;
+	padding: 0;
+	}
+	form div{
+	margin: auto;
+	width: 800px;
+	}
</style>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
@@ -41,19 +66,16 @@
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../lib/bootstrap-3.3.2-dist/css/bootstrap.css" rel="stylesheet">
</head>
-<body >
- <div class="container">
+<body>
+ <div id="rowd" class="containerd">
<div class="row">
- <div id="top" class="col-lm-8"> <img src="img/logo_min.png"></div>
+ <div id="top" class="col-lm-8">
+ <img src="img/logo_min.png">
+ </div>
</div>
</div>
- <div class="container" >
- <div class="row">
- <h1 class="text-center" >Formulaire de contact</h1>
-
- <hr>
- <div class="col-sm-8">
- <form role="form">
+ <div>
+ <form id='form' role="form">
<div class="row form-group">
<div class="col-xs-3">
<input class="form-control" id="firstName" name="firstName" placeholder="First Name" required="" type="text">
@@ -78,10 +100,6 @@
<input class="form-control" placeholder="Website URL" required="" type="homepage">
</div>
</div>
-
- </form>
- </div>
- <div class="col-sm-3 pull-right">
<div class="row form-group">
<div class="col-xs-10">
<textarea class="form-control" rows="5">Your message here</textarea>
@@ -92,14 +110,13 @@
<div class="col-xs-10">
<button class="btn btn-default pull-right">Envoyer</button>
</div>
- </div>
- </div>
- </div>
- </div >
- <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
+ </div>
+ </form>
+ </div>
+ <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
-</html>

    Write
    Preview

Markdown supported
Edit in fullscreen

Attach images by dragging & dropping or selecting them.
+</html>

    Status
    API
    Training
    Shop
    Blog
    About

    © 2015 GitHub, Inc.
    Terms
    Privacy
    Security
    Contact


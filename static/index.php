<!DOCTYPE html>
<html>
<head>
	<title>Chupil</title>
	<link rel="icon" href="img/logo_16px.ico" />
	<meta charset='utf-8'>
	<style>
		html,body{
			background-color: #352e2c;
			margin: 0;
		}
		div{
			width: 828px;
			height: 243px;
			margin: auto; 
			position: fixed;
			top: 50%;
			margin-top: -175px;
			left: 50%;
			margin-left: -414px;		
		}
		#logo { 
			
		}
		div span{
			width: 50px;
			display: block;
			margin: auto;
			font-family: 'Open Sans', Arial, sans-serif;
			color: white;
			font-size: 8px;
		}
		
		#loader{
			position: absolute;
			bottom: 10px;
			left: 45px;
			-webkit-transition: -webkit-transform 2s; 
    		transition:  transform 2s;
		}
		#loader:hover {
		    -webkit-transform: rotate(360deg); 
		    transform: rotate(360deg);
		}
	</style>
</head>
<body>
	<div>
		<img id="loader" src="img/load.png">
		<img id="logo" src="img/logo_min.png" >
	</div>
</body>
</html>
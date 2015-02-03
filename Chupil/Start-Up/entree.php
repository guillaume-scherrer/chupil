<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interface gestion produit</title>
	<link rel="stylesheet" href="css/style_header.css">
	<style type="text/css">
		#res *{
			display: inline-block;
		}
	</style>
	<script src="jquery.js"></script>
	<script type="text/javascript">
	$(function(){
			$( ".modif" ).click(function() {
  				var id = $(this).attr("id");
				var parent = $("#"+id).parent();
				var parent_id = parent.attr("id");
				var select_article = '#'+parent.attr("id")+' #article span';
				var select_quantite = '#'+parent.attr("id")+' #quantite span';
				var select_prix = '#'+parent.attr("id")+' #prix span';
				var select_etat = '#'+parent.attr("id")+' #etat span';
				var a = $(select_article).html("<input name='nom' value='"+$(select_article).text()+"' >");
				var b = $(select_quantite).html("<input name='quantite' value='"+$(select_quantite).text()+"' >");
				var c = $(select_prix).html("<input name='prix' value='"+$(select_prix).text()+"' >");
				var d = $(select_etat).html("<input name='etat' value='"+$(select_etat).text()+"' >");
				$(this).remove();
				$('#'+parent_id).append('<input type="submit">');
			});
	});

	</script>
</head>
<body>

	 <?php  include('header.php') ?> 
	<div id="content">

		<form action="produit.php" method="get">
			<input placeholder="Produit" type="text" name="produit">
			<input placeholder="Quantité" type="text" name="quantite">
			
			<span>Date de péremption</span>

			<select name="jours">
  				<option value="1">1</option> 
  				<option value="2">2</option>
  				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="mois">
  				<option value="1">1</option> 
  				<option value="2">2</option>
  				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
			<input placeholder="prix voulu" name="prix" type="text">
			<input value="ajouter" type="submit" name="submit">
		</form>
		<div id="res">
			<?php 
		
				$mysqli = new mysqli("localhost", "root", "", "chupil") or die("Connection failed: " . $mysqli->connect_error);
				$sql = "SELECT * FROM `produit`";
				$result = $mysqli->query($sql);
				while($_res =  mysqli_fetch_array($result)){
					print("<form method='get' action='modifier.php'>");
					print("<div id=".$_res['id'].">");
						print("<input name='id' type='hidden' value='".$_res['id']."' >");
						print("<div id='article'>Article : <span>".$_res['nom']."</span></div>");
						echo "</br>";
						print("<div id='quantite'>Quantité :<span>".$_res['quantite']."</span></div> ");
						echo "</br>";
						print("<div id='peremption'> Date de Préremption : <span>".$_res['peremption_j']."/".$_res['peremption_m']."</span></div> ");
						echo "</br>";
						print("<div id='prix'>Prix : <span>".$_res["prix"]."</span></div> ");
						echo "</br>";
						print("<div id='etat'>Etat :");
						if ($_res['vendu'] == 0) {
							print("Invendu</div>");
							echo "</br>";
						}else{
							print("Vendu</div>");
							echo "</br>";
						}
						print(" <button class='modif' style='border: 1px #d9534f solid;background-color:#d9534f;color:white;' id='".$_res['nom']."'> Modifier </button> ");
						print("<div style='width:100%;height:5px;background-color:black;'> </div>");

					print("</div>");
					print('</form>');
				}
					
			?>
		</div>
	</div>
	<?php // include('footer.php') ?>
</body>
</html>
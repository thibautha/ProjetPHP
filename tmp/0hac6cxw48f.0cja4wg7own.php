<span style="color:<?php echo $color; ?>;"><?php echo $message; ?></span><p>Ajouter le vin que vous souhaitez !</p>
<form method="post" action="addWine" enctype="multipart/form-data">
	<label>Nom du vin : </label><input type="text" name="wineName"/><br/>
	<label>Origine : </label><input type="text" name="origin"/><br/>
	<label>Cepage : </label><input type="text" name="cepage"/><br/>
	<label>Millésime : </label><input type="text" name="millesim"/><br/>
	<label>Nombre de bouteilles : </label><input type="text" name="quantitee"/><br/>
	<label>Commentaire ou conseil pour la dégustation : </label><br/><textarea name="conseil"></textarea><br/>
	<label>Image : </label><input type="file" name="wineImg"/><br/>
	<input type="submit" value="Ajoutez"/>
</form>
<a href="maCave">Retour sur votre cave</a>
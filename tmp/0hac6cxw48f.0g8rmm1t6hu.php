<p>ModTestAmez</p>

<!-- Si on est sur la home, on affiche un vin aléatoire -->
<?php if ($randomWine !=''): ?>

	<h2>Un vin aléatoire</h2>

	
		<h3><?php echo $randomWine['wine_name']; ?></h3>
		<ul>
			<li>Millésime : <?php echo $randomWine['wine_millesime']; ?></li>
			<li>Cépage : <?php echo $randomWine['wine_cepage']; ?></li>
			<li>Région : <?php echo $randomWine['wine_origin']; ?></li>
			<li>Conseil : <?php echo $randomWine['wine_conseil']; ?></li>
		</ul>
	

	<button class="autre-vin">Un autre !</button>

<?php endif; ?>
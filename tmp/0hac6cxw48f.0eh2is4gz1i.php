
 <div class="error"><?php echo $error; ?></div>

<form method="post" action="signup">
	<label>Mail : </label><input type="text" name="mail"/>
	<label>Mdp : </label><input type="password" name="mdp1"/>
	<label>Confirmer le mdp : </label><input type="password" name="mdp2"/>
	<input type="radio" name="majority" value="majeur"><label>Majeur</label>
	<input type="radio" name="majority" value="mineur" checked><label>Mineur</label>
	<input type="submit" value="Je m'inscris"/>
</form>
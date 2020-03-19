

	<h1>Teste</h1>

<a href="?qui=nobody">Personne</a><br>
<a href="?qui=World">Tout le monde</a><br>
<a href="?qui=Moi">Moi</a><br>


<form method="GET">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <input type="char" value="" name="color" id="size">
    <input type="submit" value="Valider">
</form>

<?php 
$who=$_GET["qui"]??" personne";

echo "<h2>Hello $who! </h2>";
<?php

include ("modules/gora.php");

?>

		<div class="col">
			<div class="artykul">
	<?php
				$id = $_GET['id'];
				$id = htmlentities($id, ENT_QUOTES, "UTF-8");
				
				include("connect.php");
				$result = $mysqli->query("SELECT id, tytul, data, obraz, tekst, zdjecia FROM aktualnosci WHERE id='$id'");
				while ( $porady = mysqli_fetch_array($result) )
				{
					echo '<div class="titlen" >';
					echo '<h2>' . $porady['tytul'] . '</h2>';
					echo '</div>';
					echo '<div class="datan" >';
					echo '<p>' . $porady['data'] . '</p>';
					echo '</div>';
					echo '<div class="obraz">';
					echo '<img src="' . $porady['obraz'] . '" alt="" width="550px" heigth="400px">';
					echo '</div>';
					echo '<div class="tekst" >';
					echo '<p>' . $porady['tekst'] . '</p>';
					echo '</div>';
					echo '<div class="zdjecia">';
					echo '<img src="' . $porady['zdjecia'] . '" alt="" width="550px" heigth="400px">';
					echo '</div>';
				}	
				$result->close();
	?>
			</div>
			
<?php

include ("modules/ad.php");

include ("modules/dol.php");

?>
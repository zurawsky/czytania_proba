<?php

include ("modules/gora.php");

?>

		<div class="col">
			<div class="artykul">
			<?php
				include("connect.php");
				$result = $mysqli->query("SELECT id, tytul, data, obraz, skrot FROM aktualnosci ORDER BY id DESC");
				while ( $porady = mysqli_fetch_array($result) )
				{
					echo '<div class="title" >';
					echo '<h2>' . $porady['tytul'] . '</h2>';
					echo '</div>';
					echo '<div class="data" >';
					echo '<p>' . $porady['data'] . '</p>';
					echo '</div>';
					echo '<div class="obr">';
					echo '<img src="' . $porady['obraz'] . '" alt="" width="150px" heigth="200px">';
					echo '</div>';
					echo '<div class="artyk" >';
					echo '<p>' . $porady['skrot'] . '</p>';
					echo '</div>';
					echo '<a href="news.php?id='.$porady['id'].'"><input type="button" value="czytaj dalej &rArr;"></a>';
				}
				$result->close();
			?>
			</div>
			
<?php

include ("modules/ad.php");

include ("modules/dol.php");

?>
<html>
	<head>
		<style>
			ul{

				font-size:22px;
			}
		</style>
	</head>
	<body>
		<h3>Library (beta)</h3>
		<hr />
		<ul>
			<?php
			foreach(scandir('.') as $dir1){
				if($dir1 == '.' || $dir1 == '..' || $dir1 == 'index.php' || $dir1 == '.htaccess'){
					continue;
				}
				echo '<li>'.$dir1;
				echo '<ul>';
				foreach(scandir($dir1) as $dir2){
					if($dir2 == '.' || $dir2 == '..' || $dir2 == 'index.php' || $dir2 == '.htaccess'){
						continue;
					}
					echo '<li>'.$dir2;
					echo '<ul>';
					foreach(scandir('./'.$dir1.'/'.$dir2) as $dir3){
						if($dir3 == '.' || $dir3 == '..' || $dir3 == 'index.php' || $dir3 == '.htaccess'){
							continue;
						}
						echo '<li>'.$dir3;
							echo '<ul>';
								foreach(scandir('./'.$dir1.'/'.$dir2.'/'.$dir3) as $dir4){
									if($dir4 == '.' || $dir4 == '..' || $dir4 == 'index.php' || $dir4 == '.htaccess'){
										continue;
									}
									echo '<a href="./'.$dir1.'/'.$dir2.'/'.$dir3.'/'.$dir4.'"><li>'.$dir4.'</li></a>';
								}
							echo '</ul>';
						echo '</li>';
					}
					echo '</ul>';
					echo '</li>';
				} 
				echo '</ul>';
				echo '</li>';
				
				
			}
			?>
		</ul>
		<hr />
	</body>
</html>
<?php
function get_files($path) {
	$files = scandir($path);
	
	?><ul><?
	foreach ( $files as $f ) {
		if ($f != '.' && $f != '..') {
			if (is_dir($path.'/'.$f)) {
				?>
				<li class="dir" >
					<a href='/student.php?path=<? echo $path.'/'.$f ?>'><? echo $f; ?></a>
				</li>
				<?
			} elseif (is_file($path.'/'.$f)) {
				?>
				<li class="file" >
					<a href='<? echo $path.$f ?>' download><? echo $f; ?></a>
				</li>
				<?
			}
		}
	}
	/*
	while (false !== ($entry = $dir->read())) {
		if ($entry != '.' && $entry != '..') { 
			echo $path.$entry;
			echo is_dir($path.$entry);
			if (is_readable($entry)) {
				
			} else {
				
			}
		}
	}*/
	?></ul><?
}
?>
<div>
	<ul class="top_<?php echo $lang;?>">
<?php
	
	$result = count($main_menu1);
	
	for ($i=0;$i<$result;$i++){
			echo "<li class='link ";
			if ($active_link == $main_menu1[$i]){
				echo " active";	
			}
			echo "'>";
     	 	echo "	<a href='";
			echo $main_menu_links1["$main_menu1[$i]"];
			echo "'>";
			echo $main_menu1[$i];
			echo "</a> \n";
			echo "</li>";
			
			if ($i < ($result-1)){
				echo "<li class='logo'>&nbsp;</li>\n";
			}
			
      		}
?>
	</ul>
</div>
<div>
	<ul>
<?php
	
	$result = count($main_menu2);
	
	for ($i=0;$i<$result;$i++){
			echo "<li class='link ";
			if ($active_link == $main_menu2[$i]){
				echo " active";	
			}
			echo "'>";
     	 	echo "	<a href='";
			echo $main_menu_links2["$main_menu2[$i]"];
			echo "'>";
			echo $main_menu2[$i];
			echo "</a> \n";
			echo "</li>";
			
			if ($i < ($result-1)){
				echo "<li class='logo'>&nbsp;</li>\n";
			}
			
      		}
?>
	</ul>
</div>
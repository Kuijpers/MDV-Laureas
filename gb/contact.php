<?php

		$pagetitle		=	"Stal Laureas Contact";
		
		$active_link	=	"Contact";
		
		$lang			=	"gb";
		
include ('../lang/'.$lang.'/main.php');

include ('../lang/'.$lang.'/arrays.php');

include ('../templates/header.php');

include ('../templates/top.php');

?>
<div class="textfield">

<p><span class="right">
	<img src="../album/thumbs/Baybe26_right.jpg" />
	<br />

	<br />
	<img src="../album/thumbs/Lilly10_right.jpg" />
  </span>
</p>

<h3>Contact</h3>

<p>Are you bitten by the miniature horse virus and you want more information about these beautiful horses, or you see a horse on my website you're interested, do not hesitate to contact me.</p>
<p>Stal Laureas - 
  
  Vanessa Vandersteen<br />
  GSM: 0472/25.31.83<br />

Belgium</p>


<div id="contact">
<?php
	include ('../lang/'.$lang.'/mail.php');
?>
    
    <h3> Contact Form </h3>
<?php
if (empty($_GET['m']))
	{
		$mode = "";	
	}
else
	{
		$mode = $_GET['m'];
	}

switch($mode)
	{
   
		default:

			include ('../includes/contactform.php');

    	break;

		case 'c':
		
			include ('../includes/contactform_check.php');
			
			if ($error == 0) // Wanneer er geen errors zijn kan de mail verstuurd worden.
				{	
					$comment_mail = nl2br($comment);
				
				
					include ('../includes/send_to.php');
					include ('../includes/send_from.php');
					
					header("Refresh: 0; URL=\"?m=b\"");
				}
		
		break;

		case 'b':
		
		echo nl2br($MAIL['thanks']);
		
		break;
   
	}//end the switch
?>
</div>

</div>
  
<?php

include ('../templates/bottom.php');


?>

<?php

		$pagetitle		=	"Stal Laureas Contact";
		
		$active_link	=	"Contact";
		
		$lang			=	"nl";
		
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

<p>Bent U gebeten door het minipaardenvirus en wil U meer inlichtingen over deze mooie paardjes, of ziet u een paardje op mijn website die je interesse opwekt, aarzel niet om contact met me op te nemen.  </p>
<p>Stal Laureas - 
  
  Vanessa Vandersteen<br />
  GSM: 0472/25.31.83<br />
  Belgi&euml;
</p>

<div id="contact">
<?php
	include ('../lang/'.$lang.'/mail.php');
?>
    
    <h3> Contact Formulier </h3>
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

<?php 
$server="localhost";
$user="root";
$password='';
$BD="gestion_inscription";
$connexion=mysqli_connect($server,$user,$password,$BD);


use C:\Program Files (x86)\EasyPHP-12.1\www\Projet-tutoriel\MailPHP;




if(isset($_GET['Adresse_email_condidat'])){
  $Numero_condidat=$_GET['Adresse_email_condidat'];
  

  require_once "MailPHP/PHPMailer.php";
  require_once "MailPHP/SMTP.php";
  require_once "MailPHP/Exception.php";


  $mail=new PHPMailer();

  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->SMTPAuth=true;
  $mail->Username="barwakomoussahassan@gamail.com";
  $mail->Pasword='77098116';
  $mail->Port=465;
  $mail->SMTPSecure="ssl";


  $mail->isHTML(true);
  $mail->setFrom($Numero_condidat);
   $mail->addAddress("barwakomoussahassan@gamail.com") ;
     //$mail->Subject=("$Numero_condidat()");
   //$mail->Body=$body

   if ($mail->sent()) {
   	$status="succes";
   	$response="Email is sent !"
   }
   else{
   		$status="failed";
   		$response="Something is Wrong: </br>". $mail->ErrorInfo;
   }
   exit(json_encode(array("status"=>$status,"response"=>$response)));

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>asistende</title>
</head>
<body>
	<h4 class="sent-notification"></h4>
<form method="POST" action="recheM.php"  id="myfrom">
		<p>Messager</p>
		<textarea rows="20" cols="100" placeholder="Message" name="body"></textarea>
		</br></br>
		<center>
			<button type="button" value="envoi Email"> Submit </button>
		</tr>
	

	
    <button><a href="user.php" >retourne</a></button>

</center>
</form>


<script  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
	function sendEmail(){

var body=$("#body");


if (isNotEmpty(body)) {

$.ajax({
url:Mail.php,
method:'GET',
dataType:'json',
date: {
body: body.val()

},success:function(response){
$('#myfrom')[0].reset();
$('sent-notification').text("Message sent successfully.")
}

});

}

	}

	function isNotEmpty(caller){
		if(caller.val()==""){
			caller.css('border','1px solid red');
			return false;
		}
		else{
			caller.css('border','');
			return true;
		}
	}

</script>
</body>
</html>







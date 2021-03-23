<?php
// Fetching Values from URL.
$name = $_POST['name1'];
$email = $_POST['email1'];
$message = $_POST['message1'];
$Bug = $_POST['Bug1'];
$Page = $_POST['Page1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

     $to = "support@assassins-creed-valhalla.over-games.fr";
	 $subject = "Formulaire de contact Assassin Creed Bug Page";
	 $mail_body = 'Nom de l\'utilisateur : '.$name.'<br/>
	 Email de l\'utilisateur : '.$email.'<br/>
	 Bug sur le site internet : '.$Bug.'<br/>
	 Page sur le site internet : '.$Page.'<br/>
	 Message de l\'utilisateur : '.$message.'
	 ';
 
           
      $headers  = 'MIME-Version: 1.0' . "\r\n";
	  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	  $headers .= 'From: '.$email.'' . "\r\n";
	  mail($to, $subject, $mail_body, $headers);
	
	
echo "<div id=\"successMail\" style=\"text-align:center; font-size: 12px;\">
    
   <div style=\"
   margin-bottom: -56px;
    margin-left: 373px;
    margin-top: 21px;
\"><div id=\"settings-resultat\" style=\"color: #ffffff;font-weight: bold;width: 393px;margin-top: 1px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgba(0, 0, 0, 0.360784) 0px 0px 10px;height: 30px;background-color: rgba(0, 0, 0, 0.360784);\"\><i class=\"fa fa-check\" style=\"color: rgb(127, 214, 74);margin-right: 2px;\"></i> Votre message est envoyer !</div>
    									</div></div>";
} else {
echo "<div id=\"errorMail\" style=\"text-align:center; font-size: 12px;\">
    
   <div style=\"
  margin-bottom: -56px;
    margin-left: 373px;
    margin-top: 21px;
\"><div id=\"settings-resultat\" style=\"color: #ffffff;font-weight: bold;width: 393px;margin-top: 1px;font-size: 12px;text-align: center;border-radius:3px;padding: 6px 9px;line-height: 1.6;box-shadow: rgba(0, 0, 0, 0.360784) 0px 0px 10px;height: 30px;background-color: rgba(0, 0, 0, 0.360784);\"\><i class=\"fa fa-remove\" style=\"color: rgb(195, 0, 0);margin-right: 2px;\"></i> L'email n'est pas bon !</div>
    									</div></div>";
}
?>
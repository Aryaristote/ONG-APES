<?php
	session_start();
	require "../config/database.php";

    $to = "eliemetusela@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $cmessage = $_REQUEST['message'];

	if(isset($_POST['submit'])){
        if(!empty(['name', 'email', 'message'])){
			
			$q = $db->prepare('INSERT INTO contact(name, email, message) VALUES (:name, :email, :message)');
			$q->execute([
				'name' => $name,
				'email' => $from,
				'message' => $cmessage,
			]);

			$_SESSION["success"] = "Votre message a été envoyé avec succès";

			header("Location: ../contact.php");
		}
	}

    // $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "Vouz avez un nouveau message de APES-RDC.";

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Nom:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";  
    // $send = mail($to, $subject, $body, $headers);

    // if($send == true ) {
    //     header('Location: ../index.html');
    //     exit;
    //  }else {
    //     echo "Message could not be sent...";
    //  }

?>
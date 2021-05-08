<?php
    session_start();

    if(isset($_POST['prenom'])){
        if(isset($_POST['nom'])){
            if(isset($_POST['email'])){
                if(isset($_POST['objet'])){
                    if(isset($_POST['message'])){
                        $entete  = 'MIME-Version: 1.0' . "\r\n";
                        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                        $entete .= 'From: ' . strip_tags($_POST['email']) . "\r\n";

                        $objet = strip_tags($_POST['objet'] ) ;
                        $texteMessage = strip_tags($_POST['message'],"<b><i>") ;


                        $message = '<a href="https://quentinperou.fr" width="100%" height="120"> <img src="https://quentinperou.fr/images/header-accueil.jpg" alt="(image décorative)" width="100%" height="120" style="width:100%; height:120px; object-fit: cover;" > </a>';

                        $message .= '<h1 style="color: #5D5D5D; ">Message sent from the Contact page of quentinperou.fr </h1>';

                        $message .='<div style="background-color:#eee;" ><p><strong>First Name : </strong>' . strip_tags($_POST['prenom']) . '<br>
                        <strong>Last Name : </strong>' . strip_tags($_POST['nom'])  . '<br>
                        <strong>Email : </strong>' . strip_tags($_POST['email']) . '<br>
                        <strong>Object : </strong>' . $objet . '<br>
                        <strong>Message : </strong><br></div>' . nl2br( $texteMessage ) . '</p> <br>';

                        $message .= "<br><div align='center' style='background: #eee;'> <a href='https://quentinperou.fr/' style='color:#000000;'>quentinperou.fr</a> </div>";


                        $retour = mail('darshansaini683@gmail.com', $objet, $message, $entete);
                        
                        if(isset($_POST['recevoirCopie'])){
                            $retour_copie = mail(strip_tags($_POST['email']), "Copy of email : ".$objet, $message, $entete);
                        }
                        
                        if($retour) {
                            $_SESSION['message']='Your message has been sent';       
                        }else{
                            $_SESSION['message']='An error occured...';
                        }
                    }
                }
            }
        }
    }

    header("Location: index.php#contact"); 
?>

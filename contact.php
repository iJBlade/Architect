<?php
/******** * Controleur qui sert à afficher le formulaire de contact * *********/
/* ******************* Librairie et session_start() ************************* */
    include 'lib/init.php';
    session_start();
if(isset($_POST['mailform']))
{

    if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
    {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"PrimFX.com"<support@primfx.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
            <body>
                <div align="center">
                        <br />
                        <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                        <u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
                        <br />
                        '.nl2br($_POST['message']).'
                        <br />
                </div>
            </body>
        </html>
        ';
        mail("mariemzn.deco@gmail.com", "CONTACT - Sitedéco.com", $message, $header);
        $msg="Votre message a bien été envoyé !";
    }
	else
	{

             $msg='<div style="margin: 0 auto;max-width: 400px;text-align: center;color: red;padding: 15px;">Tous les champs doivent être complétés !</div>';
	}
}

include 'templates/pages/contact.php';

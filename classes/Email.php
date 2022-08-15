<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    // Definir atributos
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {
        // Asignar valores en el constructor
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {
        // Enviar el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'c0476e8ab7c45a';
        $mail->Password = '9c1eb00dd90158';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Confirma tu cuenta';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'utf-8';

        $contenido ="<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> ,has creado tu cuenta en App Salon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/public/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el Email
        $mail->send();
    }

    public function enviarInstrucciones() {
        // Enviar el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'c0476e8ab7c45a';
        $mail->Password = '9c1eb00dd90158';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
        $mail->Subject = 'Restablece tu password';

        // Set HTML
        $mail->isHTML(true);
        $mail->CharSet = 'utf-8';

        $contenido ="<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> ,has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/public/recuperar?token=" . $this->token . "'>Reestablecer Password</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;

        // Enviar el Email
        $mail->send();
    }
    
}
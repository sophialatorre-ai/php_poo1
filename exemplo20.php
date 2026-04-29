<?php

interface INotificador {
    public function enviar($destinatario, $mensagem);
}

// implementar: E-mail
class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}.
        Mensagem: {$mensagem}.";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatapp
class NotificadorWhatapp implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "Whatapp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}
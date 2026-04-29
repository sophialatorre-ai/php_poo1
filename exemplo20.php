<?php

interface INotificador
{
    public function enviar($destinatario, $mensagem);
}

// implementar: E-mail
class NotificadorEmail implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}.
        Mensagem: {$mensagem}";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatapp
class NotificadorWhatapp implements INotificador
{
    public function enviar($destinatario, $mensagem)
    {
        echo "Whatapp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Classe que usa a interface
class SistemaDeNotificacoes
{
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem) 
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmail());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatapp = new SistemaDeNotificacoes(new NotificadorWhatapp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu Pedido foi confirmado");
$sistemaSMS->notificarUsuario("17997651234", "Seu Pedido foi confirmado");
$sistemaWhatapp->notificarUsuario("17997651234", "Seu Pedido foi confirmado");

<?php

class myUser extends sfBasicSecurityUser {

    private static function setSessionAttributes($user) {

        sfContext::getInstance()->getUser()->setAttribute("id", $user->id);
        sfContext::getInstance()->getUser()->setAttribute("email", $user->email_address);
        sfContext::getInstance()->getUser()->setAttribute("username", $user->username);
        sfContext::getInstance()->getUser()->setAttribute("nombre", $user->nombre );
        sfContext::getInstance()->getUser()->setAttribute("apellido", $user->apellido);
        sfContext::getInstance()->getUser()->setAttribute("tipo", $user->tipo);


    }

    public static function startSession($user) {
        sfContext::getInstance()->getUser()->setAuthenticated(true);
        self::setSessionAttributes($user);
    }
}

<?php

/**
 * main actions.
 *
 * @package    wilko
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions {
/**
 * Executes index action
 *
 * @param sfRequest $request A request object
 */
    public function executeIndex(sfWebRequest $request) {
        $this->usuarioForm = new UsuarioForm();

    }

    public function executeAutenticacion() {
        if ($this->getUser()->isAuthenticated()) {
            $this->redirect404();
        } else {
   

            if ($request->isMethod("post")) {
               
                if ($this->authform->isValid()) {
                    if (true) {
                    // No hemos conseguido loguear al usuario
                    // Redirigimos de nuevo al login con un mensaje de error
                      
                    } else {
                    // Logueamos
                    
                        myUser::startSession($user, $ip);


                      
                        
                        $this->redirect("@inicio");
                    }

                }
            }else{
                

            }
        }
    }
}

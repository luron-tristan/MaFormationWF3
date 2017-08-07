<?php

namespace Controller;

use Entity\User;

/**
 * Description of UserController
 *
 * @author Hello
 */
class UserController extends ControllerAbstract{
    
    public function registerAction()
    {
        $user = new User();
        $errors = [];
        
        if(!empty($_POST)){
            $user
                ->setLastname($_POST['lastname'])
                ->setFirstname($_POST['firstname'])
                ->setEmail($_POST['email'])
        ;
            
            if(empty($_POST['lastname'])){
                $errors['lastname'] = 'Le nom est obligatoire';
            } elseif(strlen($_POST['lastname']) > 100) {
                $errors['lastname'] = 'Le nom ne doit pas dépasser les 100 caractères';
            }
            
            if(empty($_POST['firstname'])){
                $errors['firstname'] = 'Le prénom est obligatoire';
            } elseif(strlen($_POST['firstname']) > 100) {
                $errors['firstname'] = 'Le prénom ne doit pas dépasser les 100 caractères';
            }
                        
            if(empty($_POST['email'])){
                $errors['email'] = 'L\'email est obligatoire';
            } elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'L\'email n\'est pas valide';
            } elseif(!empty($this->app['user.repository']->findByEmail($_POST['email']))){
                $errors['email'] = 'Cet email n\'est pas disponible';
            }
                                    
            if(empty($_POST['password'])){
                $errors['password'] = 'Le mot de passe est obligatoire';
            } elseif (!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['password'])) {
                $errors['password'] = 'Le mot de passe doit faire entre 6 et 20 caractères'
                    . ' et ne contenir que des lettres, des chiffres, ou les caractères _ et -'
                ;
            }
            
            if(empty($_POST['password_confirm'])){
                $errors['password_confirm'] = 'La confirmation du mot de psse est obligatoire';
            } elseif($_POST['password_confirm'] != $_POST['password']){
                $errors['password_confirm'] = 'La confirmation n\'est pas identique au mot de passe';
            }
            
            if(empty($errors)){
                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));
                $this->app['user.repository']->save($user);
                
                return $this->redirectRoute('homepage');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }            
        }
        
        return $this->render(
            'user/register.html.twig',
            [
                'user' => $user
            ]
        );
    }
    
    public function loginAction()
    {
        $email = '';
        
        if(!empty($_POST)){
            $email = $_POST['email'];
            
            $user = $this->app['user.repository']->findByEmail($email);
            var_dump($user);
            if(!is_null($user)){
                if($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword()))
                {
                    $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('Identification incorrecte', 'error');
        }
        
        return $this->render(
            'user/login.html.twig',
            ['email' => $email]
        );
    }
    
    public function logoutAction()
    {
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
}

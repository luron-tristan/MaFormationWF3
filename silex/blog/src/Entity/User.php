<?php

namespace Entity;

/**
 * Description of User
 *
 * @author Hello
 */

class User {
    /**
     *
     * @var int
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $lastname;
    
    /**
     *
     * @var string
     */
    private $firstname;
    
    /**
     *
     * @var string
     */
    private $email;
    
    /**
     *
     * @var string
     */
    private $password;
    
    /**
     *
     * @var string
     */
    private $role;
    
    
    function getId() {
        return $this->id;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    function setRole($role) {
        $this->role = $role;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
    
    public function isAdmin()
    {
        return $this->role == 'admin';
    }
}

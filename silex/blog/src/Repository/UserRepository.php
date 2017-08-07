<?php

namespace Repository;

use Entity\User;

/**
 * Description of UserRepository
 *
 * @author Hello
 */
class UserRepository extends RepositoryAbstract {
    
    protected function getTable()
    {
        return 'user';
    }
    
    public function findByEmail($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM user WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if(!empty($dbUser)){
            return $this->buildEntity($dbUser);
        }
    }
    
    public function save(User $user)
    {
        // Les données à enregistrer en bdd
        $data = [
            'lastname' => $user->getLastname(),
            'firstname' => $user->getFirstname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ];
        
        // Si la catégorie a un id, on est en update
        // sinon, en insert
        $where = !empty($user->getId())
            ? ['id' => $user->getId()]
                : null
        ;
        
        // Appel à la méthide de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // On set l'id quand on est en insert
        if(empty($user->getId())) {
            $user->setId($this->db->lastInsertid());
        }
    }
    
    /**
     * 
     * @param array $data
     * @return User
     */
    private function buildEntity(array $data)
    {
        $user = new User();
        
        $user
            ->setId($data['id'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setRole($data['role'])
        ;
        
        return $user;
    }
    
}

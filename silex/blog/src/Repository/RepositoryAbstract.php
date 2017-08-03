<?php

namespace Repository;

use Doctrine\DBAL\Connection;
use Silex\Application;

/**
 * Description of RepositoryAbstract
 *
 * @author Hello
 */
abstract class RepositoryAbstract {
    /**
     *
     * @var Connection
     */
    protected $db;
    
    /**
     * 
     * @param Application $app
     */
    public function __construct(Application $app) 
    {
        $this->db = $app['db'];
    }

    public function persist(array $data, array $where = null)
    {
        if(is_null($where))
        {
            $this->db->insert($this->getTable(), $data);
        } else {
            $this->db->update($this->getTable(), $data, $where);
        }
    }
    
    /**
     * Oblige les classes filles à définir cette méthode
     * qui renvoie le nom de la table à laquelle elles font référence
     */
    
    abstract protected function getTable();
}

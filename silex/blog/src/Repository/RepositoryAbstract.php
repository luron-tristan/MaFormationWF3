<?php

namespace Repository;

use Silex\Application;

/**
 * Description of RepositoryAbstract
 *
 * @author Hello
 */
abstract class RepositoryAbstract {
    /**
     *
     * @var \Doctrine\DBAL\Connection
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

}

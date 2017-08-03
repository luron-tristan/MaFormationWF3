<?php

namespace Entity;

/**
 * Description of Article
 *
 * @author Hello
 */
class Article {
    /**
     * @var int
     */
    private $id;
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @param int $id
     * @return int
     */
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    /**
     * 
     * @param string $id
     * @return $this
     */
    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }
}

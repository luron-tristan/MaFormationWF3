<?php

namespace Entity;

/**
 * Description of Article
 *
 * @author Hello
 */
class Article {
    /**
     *
     * @var string 
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $title;
    
    /**
     *
     * @var string
     */
    private $header;
    
    /**
     * 
     * @var string
     */
    private $content;
    
    /**
     *
     * @var Category
     */
    private $category;
    
    
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getHeader() {
        return $this->header;
    }

    function getContent() {
        return $this->content;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    function setContent($content) {
        $this->content = $content;
        return $this;
    }
    
    function getCategory(){
        return $this->category;
    }

    function setCategory(Category $category) {
        $this->category = $category;
        return $this;
    }

    public function getCategoryId()
    {
        if(!is_null($this->category))
        {
            return $this->category->getId();
        }
    }

    public function getCategoryName()
    {
        if(!is_null($this->category))
        {
            return $this->category->getName();
        }
    }
}

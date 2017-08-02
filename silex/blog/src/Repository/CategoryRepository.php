<?php
namespace Repository;

use \Entity\Category;

class CategoryRepository extends RepositoryAbstract
{
    public function findAll()
    {
        /**
         * 
         * @return array Un tableau d'objets Entity\Category
         */
        $dbCategories = $this->db->fetchAll('SELECT * FROM category');
        
        
        $categories = [];
        
        foreach ($dbCategories as $dbCategory)
        {
            $category = new Category();
            
            $category
                ->setId($dbCategory['id'])
                ->setName($dbCategory['name'])
            ;
            
            $categories[] = $category;
        }
        
        return $categories;
    }
}

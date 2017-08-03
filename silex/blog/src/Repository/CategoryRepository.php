<?php
namespace Repository;

use Entity\Category;

class CategoryRepository extends RepositoryAbstract
{
    protected function getTable() {
        return 'category';
    }
    
    /**
     * 
     * @return array Un tableau d'objets Entity\Category
     */
    public function findAll()
    {
        $dbCategories = $this->db->fetchAll('SELECT * FROM category');
        
        $categories = [];
        
        foreach ($dbCategories as $dbCategory)
        {
            /* Ce code est passé dans la méthode buildEntity()
            $category = new Category();
            
            $category
                ->setId($dbCategory['id'])
                ->setName($dbCategory['name'])
            ;
            */
            
            $category = $this->buildEntity($dbCategory);
            
            $categories[] = $category;
        }
        
        return $categories;
    }
    
    /**
     * 
     * @param type $id
     * @return Category|null
     */
    public function find($id)
    {
        $dbCategory = $this->db->fetchAssoc(
            'SELECT * FROM category WHERE id = :id',
            [
                ':id' => $id
            ]
        );
        
        if(!empty($dbCategory))
        {
            return $this->buildEntity($dbCategory);
        }
    }
    
    public function save(Category $category)
    {
        // Les données à enregistrer en bdd
        $data = ['name' => $category->getName()];
        
        // Si la catégorie a un id, on est en update
        // sinon, en insert
        $where = !empty($category->getId())
            ? ['id' => $category->getId()]
                : null
        ;
        
        // Appel à la méthide de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // On set l'id quand on est en insert
        if(empty($category->getId())) {
            $category->setId($this->db->lastInsertid());
        }
    }
    
    public function delete(Category $category)
    {
        $this->db->delete(
            'category',
            ['id' => $category->getId()]
        );
    }
    
    /**
     * Crée un objet Entity\Category 
     * à partir d'un tableau de données venant de la bdd
     * 
     * @param array $data
     * @return Category
     */
    private function buildEntity(array $data)
    {
        $category = new Category();
        
        $category
            ->setId($data['id'])
            ->setName($data['name'])
        ;
        
        return $category;
    }
}

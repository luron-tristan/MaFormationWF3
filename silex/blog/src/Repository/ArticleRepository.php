<?php
namespace Repository;

use Entity\Article;

class ArticleRepository extends RepositoryAbstract
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
        $dbArticles = $this->db->fetchAll('SELECT * FROM article');
        
        $articles = [];
        
        foreach ($dbArticles as $dbArticle)
        {
            
            $article = $this->buildEntity($dbCategory);
            
            $articles[] = $article;
        }
        
        return $articles;
    }
    
    /**
     * 
     * @param type $id
     * @return Article|null
     */
    public function find($id)
    {
        $dbArticle = $this->db->fetchAssoc(
            'SELECT * FROM article WHERE id = :id',
            [
                ':id' => $id
            ]
        );
        
        if(!empty($dbArticle))
        {
            return $this->buildEntity($dbArticle);
        }
    }
    
    public function save(Article $article)
    {
        // Les données à enregistrer en bdd
        $data = ['name' => $article->getName()];
        
        // Si la catégorie a un id, on est en update
        // sinon, en insert
        $where = !empty($article->getId())
            ? ['id' => $article->getId()]
                : null
        ;
        
        // Appel à la méthide de RepositoryAbstract pour enregistrer
        $this->persist($data, $where);
        
        // On set l'id quand on est en insert
        if(empty($article->getId())) {
            $article->setId($this->db->lastInsertid());
        }
    }
    
    public function delete(Article $article)
    {
        $this->db->delete(
            'article',
            ['id' => $article->getId()]
        );
    }
    
    /**
     * Crée un objet Entity\Article 
     * à partir d'un tableau de données venant de la bdd
     * 
     * @param array $data
     * @return Article
     */
    private function buildEntity(array $data)
    {
        $article = new Article();
        
        $article
            ->setId($data['id'])
            ->setName($data['name'])
        ;
        
        return $article;
    }
}

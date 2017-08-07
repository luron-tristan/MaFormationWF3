<?php
namespace Repository;

use Entity\Article;
use Entity\Category;

class ArticleRepository extends RepositoryAbstract
{
    protected function getTable() {
        return 'article';
    }
    
    /**
     * 
     * @return array Un tableau d'objets Entity\Category
     */
    public function findAll()
    {
        $query = 'SELECT a.*, c.name FROM article a'
            . ' JOIN category c ON a.category_id = c.id'
        ;
        
        /* Syntaxe heredoc
        $query = <<<EOS
SELECT * FROM article a
JOIN category c ON a.category_id = c.id
EOS;
        */
        
        
        $dbArticles = $this->db->fetchAll($query);
        
        $articles = [];
        
        foreach ($dbArticles as $dbArticle)
        {
            
            $article = $this->buildEntity($dbArticle);
            
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
        $query = 'SELECT a.*, c.name FROM article a'
            . ' JOIN category c ON a.category_id = c.id'
            . ' WHERE a.id = :id'
        ;
        
        $dbArticle = $this->db->fetchAssoc(
            $query,
            [':id' => $id]
        );
        
        if(!empty($dbArticle))
        {
            return $this->buildEntity($dbArticle);
        }
    }
    
    public function save(Article $article)
    {
        // Les données à enregistrer en bdd
        $data = [
                    'title' => $article->getTitle(),
                    'header' => $article->getHeader(),
                    'content' => $article->getContent(),
                    'category_id' => $article->getCategoryId()
                ];
        
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
    
    public function findByCategory(Category $category){
         $query = 'SELECT a.*, c.name FROM article a'
            . ' JOIN category c ON a.category_id = c.id'
            . ' WHERE c.id = :id';

        $dbArticles = $this->db->fetchAll($query,          [
                    ':id' => $category->getId()
                ]  );
        
        $articles = [];
        
        foreach ($dbArticles as $dbArticle)
        {
            $article[] = $this->buildEntity($dbArticle);
        }
        
        return $articles;
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
        $category = new Category();
        
        $category
            ->setId($data['category_id'])
            ->setName($data['name'])
        ;
        
        $article = new Article();
        
        $article
            ->setId($data['id'])
            ->setTitle($data['title'])
            ->setHeader($data['header'])
            ->setContent($data['content'])
            ->setCategory($category)
        ;
        
        return $article;
    }
}

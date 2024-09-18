<?php

namespace app;

use PDO;

class Database
{
    public \PDO $pdo;
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost; port=3306;dbname=products_crug', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getproduct($search='')
    {
        $search = $_GET['search'] ?? '';
        if ($search) {
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY CREATE_DATE DESC');
            $statement->bindValue(':title', "% $search %");
        } else {
            $statement = $this->pdo->prepare('SELECT * FROM PRODUCTS ORDER BY CREATE_DATE DESC');
        }


        // $statement = $this->pdo->prepare('SELECT * FROM PRODUCTS ORDER BY CREATE_DATE DESC');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

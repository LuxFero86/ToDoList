<?php

namespace App\Repository;

use App\Database\Mysql;
use App\Entity\Task;
use App\Entity\Account;

class TaskRepository {

    // Connexion à la BDD
    private \PDO $connect;

    //Constructor
    public function __construct() {
        $this->connect = Mysql::connectBdd();
    }

    //Methods
    public function addTask(Task $task, Account $account): Task {
        try {
            // 1) Ecrire la requête
            $sql = 'INSERT INTO task(title, `description`, created_at, updated_at, finish_on, `status`, `repeat`, account_id) VALUES(?, ?, ?, ?, ?, ?, ?, ?)';
            // 2) Préparer la requête
            $req = $this->connect->prepare($sql);
            // 3) Assigner les paramètres
            $req->bindValue(1, $task->getTitle(), \PDO::PARAM_STR);
            $req->bindValue(2, $task->getDescription(), \PDO::PARAM_STR);
            $req->bindValue(3, $task->getCreatedAt(), \PDO::PARAM_STR);
            $req->bindValue(4, $task->getUpdatedAt(), \PDO::PARAM_STR);
            $req->bindValue(5, $task->getFinishOn(), \PDO::PARAM_STR);
            $req->bindValue(6, $task->getRepeat(), \PDO::PARAM_STR);
            $req->bindValue(7, $task->getStatus(), \PDO::PARAM_STR);
            $req->bindValue(8, $account->getId(), \PDO::PARAM_INT);
            // 4) Exécuter la requête
            $req->execute();
            // 5) Récupérer l'ID
            $id = $this->connect->lastInsertId();
            // 6) Setter l'ID
            $task->setId($id);
            // 7) lancer la requête pour la table d'association
            
        } catch(\PDOException $e) {}
        return $task;
    }

}

?>
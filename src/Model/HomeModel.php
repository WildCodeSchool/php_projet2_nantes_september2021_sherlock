<?php

namespace App\Model;

class HomeModel extends AbstractManager
{
    public const TABLE="enigme";

    public function insert(array $item): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`titre`, 'resume', 'histoire') VALUES (:titre, :resume, :histoire)");
        $statement->bindValue('titre', $item['titre'], \PDO::PARAM_STR);
        $statement->bindValue('resume', $item['resume'], \PDO::PARAM_STR);
        $statement->bindValue('histoire', $item['histoire'], \PDO::PARAM_STR);

        $statement->execute();
        return (int)$this->pdo->lastInsertId();
    }

    /**
     * Update item in database
     */
    public function update(array $item): bool
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `title` = :title WHERE id=:id");
        $statement->bindValue('id', $item['id'], \PDO::PARAM_INT);
        $statement->bindValue('title', $item['title'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    public function selectAllQuestions(string $orderBy = '', string $direction = 'ASC')
    {
        $query = "SELECT * FROM question";
        if ($orderBy) {
            $query .= ' ORDER BY ' . $orderBy . ' ' . $direction;
        }

        return $this->pdo->query($query)->fetchAll();
    }

    public function insertQuestion(string $intitule)
    {
        $statement = $this->pdo->prepare("INSERT INTO question (`intitule`) VALUES (:intitule)");
        $statement->bindValue('intitule', $intitule, \PDO::PARAM_STR);

        $statement->execute();
    }

    public function deleteQuestionById(int $id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM question WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    public function updateQuestionById(array $item): bool
    {
        $statement = $this->pdo->prepare("UPDATE question SET `intitule` = :intitule WHERE id=:id");
        $statement->bindValue('id', $item['id'], \PDO::PARAM_INT);
        $statement->bindValue('intitule', $item['intitule'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    //retourne un tableau de question/reponse/indice liés a la question et au personnage passé en parametre
    public function reponseQuestionById(int $id, string $intitule)
    {
        $statement = $this->pdo->prepare("SELECT * from reponse_question
        JOIN personne ON personne.id=personne_id
        JOIN question ON question.id=question_id
        where personne.id=:id AND intitule =:intitule");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->bindValue('intitule', $intitule, \PDO::PARAM_INT);

        $statement->execute();

        return $statement->fetch();
    }

}
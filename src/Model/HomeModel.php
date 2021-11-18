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
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `titre` = :titre WHERE id=:id");
        $statement->bindValue('id', $item['id'], \PDO::PARAM_INT);
        $statement->bindValue('titre', $item['titre'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    public function selectAllPersonnage() {
        {
            $query = "SELECT * FROM personne";
            return $this->pdo->query($query)->fetchAll();
        }
    }

    //partie enigmes
    public function insertEnigme(string $titre)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`titre`) VALUES (:titre)");
        $statement->bindValue('titre', $titre, \PDO::PARAM_STR);

        $statement->execute();
    }

    public function updateEnigmeById(array $item): bool
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `titre` = :titre WHERE id=:idModif");
        $statement->bindValue('idModif', $item['idModif'], \PDO::PARAM_INT);
        $statement->bindValue('titre', $item['titre'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    //partie questions

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
        $statement = $this->pdo->prepare("UPDATE question SET `intitule` = :question WHERE id=:idModif");
        $statement->bindValue('idModif', $item['idModif'], \PDO::PARAM_INT);
        $statement->bindValue('question', $item['question'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    //partie indices
    public function selectAllIndices(string $orderBy = '', string $direction = 'ASC')
    {
        $query = "SELECT * FROM reponse_question";
        if ($orderBy) {
            $query .= ' ORDER BY ' . $orderBy . ' ' . $direction;
        }

        return $this->pdo->query($query)->fetchAll();
    }

    public function insertIndice(string $indice)
    {
        $statement = $this->pdo->prepare("INSERT INTO reponse_question (`indice`) VALUES (:indice)");
        $statement->bindValue('indice', $indice, \PDO::PARAM_STR);

        $statement->execute();
    }

    public function deleteIndiceById(int $id): void
    {
        $statement = $this->pdo->prepare("DELETE FROM reponse_question WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    public function updateIndiceById(array $item): bool
    {
        $statement = $this->pdo->prepare("UPDATE reponse_question SET `indice` = :indice WHERE id=:idModif");
        $statement->bindValue('idModif', $item['idModif'], \PDO::PARAM_INT);
        $statement->bindValue('indice', $item['indice'], \PDO::PARAM_STR);

        return $statement->execute();
    }

    //retourne un tableau de question/reponse/indice liés a la question et au personnage passé en parametre
    public function reponseQuestionById(int $id)
    {
        $statement = $this->pdo->prepare("SELECT intitule, reponse, indice from reponse_question
        JOIN personne ON personne.id=personne_id
        JOIN question ON question.id=question_id
        where personne.id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);

        $statement->execute();

        return $statement->fetchAll();
    }

    public function exist(string $username, string $password): bool
    {
        $utilisateurValide = false;
        $query = "SELECT * FROM utilisateur";
        $utilisateurs = $this->pdo->query($query)->fetchAll();
        foreach($utilisateurs as $utilisateur) {
            if($username == $utilisateur["pseudo"] and $password == $utilisateur["password"])
            {
                $utilisateurValide = true;
            }
        }
        return $utilisateurValide;
    }
}
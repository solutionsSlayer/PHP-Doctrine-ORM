<?php

class QueryBuilder

{
    protected $pdo;

    function __construct($pdo)

    {
        $this->pdo = $pdo;
    }

    function selectAll($table)

    {
        $statement = $this->pdo->prepare("SELECT * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    function insert($table, $parameters)

    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            echo 'Something went wrong';

            die($e->getMessage());

        }

    }

    function update($table, $parameters)

    {
        $sql = sprintf(
            "update %s set name = (%s) where id = (%s)",
            $table,
            $parameters['name'],
            $parameters['id']
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            echo 'Something went wrong';

            die($e->getMessage());

        }

    }

    function delete($id) {
        $query = 'DELETE FROM users WHERE id=:id;';
        $statement = $this->pdo->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }
}

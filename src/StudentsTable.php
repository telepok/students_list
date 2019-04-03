<?php

class StudentsTable
{
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function fetchAll()
    {
        return $this->pdo->query('SELECT * FROM students')->fetchAll();
    }

    public function fetch($records, $order, $offset)
    {
        return $this->pdo->query("SELECT * FROM students ORDER BY $order LIMIT $records OFFSET $offset")->fetchAll();
    }

    public function addRow($first_name, $last_name, $groupNumber, $rating, $e_mail)
    {
        $sql = "INSERT INTO students VALUES ('$first_name', '$last_name', $groupNumber, $rating, '$e_mail')";
        $this->pdo->query($sql);
    }

    public function update($first_name, $last_name, $groupNumber, $rating, $e_mail)
    {
        $sql = "UPDATE students SET e_mail='$e_mail' 
                WHERE first_name='$first_name' AND
                      last_name='$last_name' AND
                      groupNumber='$groupNumber' AND
                      rating='$rating'
                ";
//        echo $sql . PHP_EOL;
        $this->pdo->query($sql);
    }
}
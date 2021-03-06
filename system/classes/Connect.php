<?php

class Connect extends Singleton
{
    /**
     * Свойство содержащее объект подключения к БД
     *
     * @var \PDO
     */
    private $pdo;

    /**
     * @return \PDO
     */
    public function getConnection() : \PDO
    {
        if (!$this->pdo) {
            try {
                $this->pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->pdo->exec("set names utf8");
            } catch (\PDOException $e)  {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
        }
        return $this->pdo;
    }
}
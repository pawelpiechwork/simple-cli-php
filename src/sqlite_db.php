<?php

class SqliteDb {
    private \PDO $pdo;

    public function __construct(string $file) {
        $this->pdo = new \PDO("sqlite:" . $file);
    }

    public function query(string $sql): array {
        $stmt = $this->pdo->query($sql);
        if (!$stmt) {
            return [];
        }
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

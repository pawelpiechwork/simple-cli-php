<?php

class TablePrinter {
    public function print(array $rows): void {
        if (empty($rows)) {
            echo "0 rows found\n";
            return;
        }

        var_dump($rows);
    }
}

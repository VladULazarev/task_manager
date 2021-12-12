<?php

namespace Core;

use App\Controllers\ErrorController;
use PDO;

class Model extends DbConnection
{

    // * Names of existing DB tables
    /** @var string The name of the DB table  */
    protected $tasksTb = 'tasks';

    /** @var string The name of the DB table  */
    protected $usersTb = 'users';

    /**
     * Find how many rows having $cellValue in $columnName of the current $tableName
     *  Usage example:
     *    $modelObj = new Model();
     *    How many $checkUserEmail was found in 'contactmessages' table:
     *    $checkUserEmail = $modelObj->checkIfCellValueExists('id', 'contactmessages', 'email', $contactEmail);
     *
     * @param string $someThing Name of the column. Example: id
     * @param string $tableName The name of the DB table
     * @param string $columnName The name of the column, example - 'user_email'
     * @param string $cellValue The user's email from 'contact form'
     * @return int $amountOfRecords The amount of rows which have $cellValue
     */
    public function checkIfCellValueExists(string $someThing, string $tableName, string $columnName, string $cellValue): int
    {
        $query = $this->connect()->query("SELECT
            $someThing
              FROM $tableName
                WHERE $columnName = '$cellValue'
        ");

        $amountOfRecords = $query->rowCount();

        return $amountOfRecords;
    }

    /**
     * Get the value of the cell from the current table
     *
     * @param string $tableName The name of the current table
     * @param string $columnName The name of the column
     * @param string $identifierWhere Identifier for 'WHERE' condition
     * @param string $identifierValue Value for 'WHERE' condition
     * @return Object $data instance of PDO Statement
     *
     * Usage:
     *    $modelObj = new Model();
     *    $amountOfProductAvailable = $modelObj->getCellValue($tableName, $columnName, $identifierWhere, $identifierValue);
     *
     * Echo result:
     *    $amountOfPrAv = $amountOfProductAvailable->available;
     *    echo $amountOfPrAv;
     */
    public function getCellValue(string $tableName, $columnName, $identifierWhere, $identifierValue)
    {
        $query = $this->connect()->query("SELECT

            $columnName
              FROM $tableName
                WHERE $identifierWhere = '$identifierValue'
        ");

        $data = $query->fetch(PDO::FETCH_OBJ);

        return $data;
    }

    /**
     * Get records from the current table
     *
     * @param int $beginFromRow The number of row to start query
     * @param int $rowsPerPage Th amount of rows per page
     * @return Object $data instance of PDO Statement
     */
    public function index(int $beginFromRow, int $rowsPerPage)
    {
        $data = $this->connect()->query("SELECT
            *
              FROM $this->tasksTb
            ORDER BY id DESC LIMIT $beginFromRow, $rowsPerPage
        ");

        return $data;
    }

    /**
     * Count records in the current table
     *
     * Usage:
     *   $modelObj = new Core\Model();
     *   $countProducts = $modelObj->countRecords('products');
     *
     * @param string $tableName The name of the table
     * @return int $amountOfRecords Amount of records founded in the current table
     */
    public function countRecords(string $tableName)
    {
        $query = $this->connect()->query("SELECT
          id
            FROM $tableName
        ");

        $amountOfRecords = $query->rowCount();

        return $amountOfRecords;
    }

}

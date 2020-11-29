<?php
namespace BeeJee\Database;


use BeeJee\SearchData;
use BeeJee\Task;

class TaskMapper
{
    private $pdo;
    private $lastCount = 0;
    function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    /**
     * @param $id
     * @return Task|bool
     * @throws \Exception
     */
    function getTask($id)
    {
        try {
            $sql = 'SELECT `userid`, `username`, `e-mail`, `text`, `admin_fulfilled`, `fulfilled` FROM `tasks` WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                $result = new Task($id,
                    $assoc['userid'],
                    $assoc['username'],
                    $assoc['e-mail'],
                    $assoc['text'],
                    (bool)$assoc['admin_fulfilled'],
                    (bool)$assoc['fulfilled']);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при получении задачи.', 0, $e);
        }
        return $result;
    }
    
    /**
     * @param SearchData $data
     * @return array|bool
     * @throws \Exception
     */
    function getTasks(SearchData $data)
    {
        $sortBy = $data->getSortby();
        $order  = $data->getOrder();
        $limit  = $data->getLimit();
        $offset = $data->getOffset();
        try {
            
            $tasks = array();
        
            $sql = "SELECT SQL_CALC_FOUND_ROWS
                    `id`, `userid`, `username`, `e-mail`, `text`, `admin_fulfilled`, `fulfilled`
                    FROM `tasks`
                    ORDER BY `$sortBy` $order
                    LIMIT :limit OFFSET :offset";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, \PDO::PARAM_INT);
            if ( ($stmt->execute()) && ($stmt->rowCount() > 0) )  {
                while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                    $tasks[] = $this->convertToObject($row);
                }
            } else {
                $tasks = false;
            }
        
            $this->lastCount = $this->foundRows();
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при получении данных студентов', 0, $e);
        }
        return $tasks;
    }
    
    /**
     * @param UserMapper $userMapper
     * @param $userid
     * @param $text
     * @param $email
     * @param $imgPathRel
     * @return Task|bool
     * @throws \Exception
     */
    function addTask(UserMapper $userMapper, $userid, $email, $text)
    {
        try {
            $username = $userMapper->getUser($userid)->getName();
            $sql = 'INSERT INTO `tasks`(`userid`, `username`, `e-mail`, `text`, `fulfilled`, `admin_fulfilled`)
                    VALUES (:userid, :username, :email, :text, :fulfilled, :admin_fulfilled)';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':userid', $userid, \PDO::PARAM_INT);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':text', $text);
            $stmt->bindValue(':fulfilled', false,\PDO::PARAM_INT);
            $stmt->bindValue(':admin_fulfilled', false,\PDO::PARAM_INT);
            $result = $stmt->execute();
            
            if ( ($result !== false) AND ($this->lastInsertedId() !== 0) ) {
                $id = $this->lastInsertedId();
                $result = $this->getTask($id);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при добавлении задачи.', 0, $e);
        }
        return $result;
    }
    
    /**
     * Имеет смысл использовать только следующим же выражением после insert.
     *
     * @return int id of last inserted ID or 0 if cannot retrieve
     */
    public function lastInsertedId()
    {
        return (int)$this->pdo->lastInsertId();
    }
    
    /**
     * @param $taskID
     * @param $newText
     * @return bool
     * @throws \Exception
     */
    function changeText($taskID, $newText)
    {
        try {
            $sql = 'UPDATE `tasks` SET `text` = :text WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $taskID, \PDO::PARAM_INT);
            $stmt->bindParam(':text', $newText);
            $result = $stmt->execute();
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при изменении текста задачи.', 0, $e);
        }
        return $result;
    }
    
    /**
     * @param $taskID
     * @param $fulfilled
     * @return bool
     * @throws \Exception
     */
    function changeStatus($taskID, $admin_fulfilled)
    {
        try {
            $sql = 'UPDATE `tasks` SET `admin_fulfilled` = :status_todo  WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $taskID, \PDO::PARAM_INT);
            $status_todo = (int)$admin_fulfilled;
            $stmt->bindParam(':status_todo', $status_todo, \PDO::PARAM_INT);
            $result = $stmt->execute();
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при изменении статуса задачи.', 0, $e);
        }
        return $result;
    }
    
    function changeStatusParraler($taskID, $fulfilled)
    {
        try {
            $sql = 'UPDATE `tasks` SET `fulfilled` = :status  WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $taskID, \PDO::PARAM_INT);
            $status = (int)$fulfilled;
            $stmt->bindParam(':status', $status, \PDO::PARAM_INT);
            $result = $stmt->execute();
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при изменении статуса задачи.', 0, $e);
        }
        return $result;
    }
    /**
     * @return int|bool
     * @throws \Exception
     */
    public function foundRows()
    {
        try {
            //initialize default value of result
            $count = false;
            //get sql
            $sql = 'SELECT FOUND_ROWS()';
            $stmt = $this->pdo->prepare($sql);
            if ($stmt->execute()) {
                //if get nothing from DB
                if ($stmt->rowCount() == 0) {
                    $count = false;
                }
                $row = $stmt->fetch(\PDO::FETCH_NUM);
                //on success we get only one item from DB
                $count = $row[0];
                
            } else {
                $count = false;
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка при получении числа записей', 0, $e);
        }
        
        return $count;
    }
    
    /**
     * Gets number of rows, affected by last select query, !without! WHERE clauses.
     * @return mixed|bool number of rows on success, FALSE if failure.
     */
    public function getEntriesCount()
    {
        return $this->lastCount;
    }
    
    /**
     * @param $row
     * @return Task
     * @throws \Exception
     */
    private function convertToObject($row)
    {
        $required = array('id' => 1, 'userid' => 2, 'username' => 3, 'e-mail' => 4, 'text' => 5, 'fulfilled' => 6, 'admin_fulfilled' => 7);
        if (( !is_array($row) )  || ( !empty(array_diff_key($required, $row)) )) {
            throw new \Exception('Строка не содержит нужных данных');
        }
        
        $task = new Task((int)$row['id'],
                         (int)$row['userid'],
                         (string)$row['username'],
                         (string)$row['e-mail'],
                         (string)$row['text'],
                         (bool)$row['fulfilled'],
                         (bool)$row['admin_fulfilled']);
        return $task;
    }
    
}
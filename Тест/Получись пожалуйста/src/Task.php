<?php

namespace BeeJee;

class Task
{
    private $id;
    private $userid;
    private $username;
    private $email;
    private $text;
    private $fulfilled;
    private $admin_fulfilled;
    
    public function __construct($id, $userid, $username, $email, $text, $fulfilled, $admin_fulfilled)
    {
        $this->setId($id);
        $this->setUserid($userid);
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setText($text);
        $this->setFulfilled($fulfilled);
        $this->setAdminFulfilled($admin_fulfilled);
    }
    
    /**
     * @param int $id
     */
    public function setId($id)
    {
        if (is_int($id)) {
            $this->id = $id;
        } else {
            throw new \Exception('Идентификатор задачи не является int');
        }
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        if (is_int($userid)) {
            $this->userid = $userid;
        } else {
            throw new \Exception('Идентификатор пользователя для задачи не является int');
        }
    }
    
    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }
    
    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
    
    
    /**
     * @param boolean $fulfilled
     */
    public function setFulfilled($fulfilled)
    {
        if (is_bool($fulfilled)) {
            $this->fulfilled = $fulfilled;
        } else {
            throw new \Exception('Состояние задачи не bool');
        }
    }
    
    /**
     * @return boolean
     */
    public function getFulfilled()
    {
        return $this->fulfilled;
    }
    
    /**
     * @param boolean $admin_fulfilled
     */
    public function setAdminFulfilled($admin_fulfilled)
    {
        if (is_bool($admin_fulfilled)) {
            $this->admin_fulfilled = $admin_fulfilled;
        } else {
            throw new \Exception('Состояние задачи не bool');
        }
    }
    
    /**
     * @return boolean
     */
    public function getAdminFulfilled()
    {
        return $this->admin_fulfilled;
    }
    
    /**
     * @return array
     */
    public function getArray()
    {
        $result = array(
            'id'         => $this->getId(),
            'username'   => $this->getUsername(),
            'email'      => $this->getEmail(),
            'text'       => $this->getText(),
            'fulfilled'  => $this->getFulfilled(),
            'admin_fulfilled'  => $this->getAdminFulfilled()
        );
        return $result;
    }
}
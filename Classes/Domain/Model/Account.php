<?php
/**
 * Created by PhpStorm.
 * User: MaximKashapov
 * Date: 05.07.2016
 * Time: 10:56
 */
class Account extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
    /**
     * @var string
     **/
    protected $user = '';

    /**
     * @var string
     **/
    protected $pass = '';

    /**
     * @var int
     **/
    protected $uid = -1;

    public function __construct($user = '', $pass = '') {
        $this->setUser($user);
        $this->setPass($pass);
        $this->uuid = uniqid("user_", true);
    }

    /**
     * @return string
     */
    public function getPass() {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass) {
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user) {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function uuid() {
        return $this->uid;
    }

}
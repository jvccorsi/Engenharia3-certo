<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\User.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\UserDAO.php';

class UserTest extends TestCase {

    protected $user;
    protected $userDAO;

    protected function setUp(): void {
        $this->user = new User();
        $this->userDAO = new UserDAO();

        $this->user->setId(1);
        $this->user->setEmail('roque@email.com');
        $this->user->setPassword('123');
    }

    public function testIfUserCanLogin() {
                
        $expectedResult['id_usuario'] = '1';
        $expectedResult['email'] = 'roque@email.com';
        $expectedResult['senha'] = '123';

        $this->assertEquals($expectedResult, $this->userDAO->selectByCredentials($this->user));
    }

    public function testIfFindOneUser() {

        $this->assertContains($this->user->getEmail(), $this->userDAO->select($this->user->getId()));
    }
}
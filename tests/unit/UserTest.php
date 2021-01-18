<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\User.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Classes\usuario.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\UserDAO.php';

class UserTest extends TestCase {

    protected $oldUser;
    protected $user;
    protected $userDAO;

    protected function setUp(): void {
        $this->oldUser = new Usuario();
        $this->user = new User();
        $this->userDAO = new UserDAO();

        $this->user->setId(1);
        $this->user->setEmail('roque@email.com');
        $this->user->setPassword('1234');
    }

    public function testIfUserCanLogin() {

        $expectedResult = 'roque@email.com';

        $this->assertContains($expectedResult, $this->userDAO->selectByCredentials($this->user));
    }

    public function testIfFindOneUser() {

        $expectedResult = 'roque@email.com';

        $this->assertContains($expectedResult, $this->userDAO->select($this->user->getId()));
    }

    public function testIfUserCanChangePassword() {

        $newPassword = '1234';
        $userId = '1';

        $this->assertTrue($this->oldUser->setNovaSenha($newPassword, $userId));
    }
}
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
        $this->user->setEmail('user@email.com');
        $this->user->setPassword('password');
    }

    public function testIfUserCanLogin() {
                
        $expectedResult['id_usuario'] = 1;
        $expectedResult['email'] = 'user@email.com';
        $expectedResult['senha'] = 'password';

        $this->assertEquals($expectedResult, $this->userDAO->selectByCredentials($this->user));
    }

    public function testIfFindOneUser() {
                
        $expectedResult['id_usuario'] = '1';
        $expectedResult['email'] = 'roque@email.com';
        $expectedResult['senha'] = '123';
        $expectedResult['username'] = 'roquemgc';
        $expectedResult['nome'] = 'Roque';
        $expectedResult['sobrenome'] = 'Gomes Costa';
        $expectedResult['cpf'] = '388.111.222-23';
        $expectedResult['data_nasc'] = '30/11//0001';
        $expectedResult['genero'] = 'masculino';
        $expectedResult['telefone'] = '(19)99542-6742';

        $this->assertEquals($expectedResult, $this->userDAO->select($this->user->getId()));
    }
}
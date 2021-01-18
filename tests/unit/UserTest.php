<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\User.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\UserDAO.php';

class UserTest extends TestCase {

    protected $user;
    protected $userDAO;

    protected function setUp(): void {
        $this->user = new User();
        $this->userDAO = new User();

        $this->user->setId(1);
        $this->user->setEmail('user@email.com');
        $this->user->setPassword('password');
    }

    public function getConnection() {
        $pdo = new PDO('sqlite::memory:');
        return $this->createDefaultDBConnection($pdo, ':memory:');
    }

    public function getDataSet() {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/guestbook-seed.xml');
    }

    public function testIfUserCanLogin() {
        $this->userDAO = $this->createMock(UserDAO::class);
                
        $expectedResult['id_usuario'] = 1;
        $expectedResult['email'] = 'user@email.com';
        $expectedResult['senha'] = 'password';

        // Cria um mapa de argumentos para valores retornados.
        $map = [
            ['a', 'b', 'c', 'd'],
            ['e', 'f', 'g', 'h']
        ];
        // Configura o esboço.
        $this->userDAO->method('selectByCredentials')
                        ->will($this->returnValueMap($map));

        $this->assertEquals('d', $this->userDAO->selectByCredentials('a', 'b', 'c'));
    }

    // public function testIfFindOneUser() {
    //     $userDAO = new UserDAO();
    //     $userDAO = $this->createMock(UserDAO::class);
                
    //     $expectedResult['id_usuario'] = 1;
    //     $expectedResult['email'] = 'user@email.com';
    //     $expectedResult['senha'] = 'password';

    //     // Configura o esboço.
    //     $userDAO->method('selectByCredentials')
    //                     ->willReturn($this->user);

    //     $this->assertEquals($expectedResult, $userDAO->selectByCredentials($this->user));
    // }
}
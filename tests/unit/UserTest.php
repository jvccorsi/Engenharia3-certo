<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\User.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\UserDAO.php';

class UserTest extends TestCase {

    public function testIfUserCanLogin() {
        $user = new User();
        $userDAO = new UserDAO();

        $user->setId(8);
        $user->setEmail('roque@email.com');
        $user->setPassword('123');

        $result = $userDAO->selectByCredentials($user);

        $expectedArrayResult['id_usuario'] = 8;
        $expectedArrayResult[0] = 8;
        $expectedArrayResult['email'] = 'roque@email.com';
        $expectedArrayResult[1] = 'roque@email.com';
        $expectedArrayResult['senha'] = '123';
        $expectedArrayResult[2] = '123';

        $this->assertEquals($expectedArrayResult, $result);
    }
}
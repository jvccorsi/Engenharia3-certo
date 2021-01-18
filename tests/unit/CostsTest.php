<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\Costs\FixedCost.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\Costs\VariableCost.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\FixedCostDAO.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\VariableCostDAO.php';

class CostTest extends TestCase {

    protected $fixedCost;
    protected $variableCost;
    protected $fixedCostDAO;
    protected $variableCostDAO;

    protected function setUp(): void {
        $this->fixedCost = new FixedCost();
        $this->variableCost = new VariableCost();
        $this->fixedCostDAO = new FixedCostDAO();
        $this->variableCostDAO = new VariableCostDAO();

        $this->fixedCost->setId_evento(1);
        $this->fixedCost->setItem('Salão máximo');
        $this->fixedCost->setPreco(500);
        $this->fixedCost->setObs('Doidera');
        $this->variableCost->setId_evento('');
        $this->variableCost->setNome('Cerva');
        $this->variableCost->setPreco(3);
        $this->variableCost->setEmail(500);
        $this->variableCost->setObs('Gelada');
    }

    public function testIfFindAllVariableCosts() {
                
        $expectedResult['id_usuario'] = '1';
        $expectedResult['email'] = 'roque@email.com';
        $expectedResult['senha'] = '123';

        $this->assertEquals($expectedResult, $this->userDAO->selectByCredentials($this->user));
    }

    public function testIfFindOneUser() {

        $this->assertContains($this->user->getEmail(), $this->userDAO->select($this->user->getId()));
    }
}
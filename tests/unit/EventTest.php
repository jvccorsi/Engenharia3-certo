<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\Event.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\DAO\EventDAO.php';

class EventTest extends TestCase {

    protected $event;
    protected $eventDAO;

    protected function setUp(): void {
        $this->event = new Event();
        $this->eventDAO = new EventDAO();

        $this->event->setId(10);
        $this->event->setName('Festona');
    }

    public function testIfFindAllEvents() {

        $expectedKeyResult = $this->event->getName();

        $result = $this->eventDAO->selectAll();

        $this->assertGreaterThanOrEqual(2, count($result));
        $this->assertContains($expectedKeyResult, $result[0]);
    }

    public function testIfCanFindOneEvent() {

        $idEvento = 1;
        $expectedResult = $this->event->getName();

        $result = $this->eventDAO->select($idEvento);

        $this->assertEquals($expectedResult, $result['nome_evento']);
    }

    public function testIfUserCanDeleteOneEvent() {

        $idEVento = $this->event->getId();

        $this->assertTrue($this->eventDAO->delete(10));
    }
}
<?php

use PHPUnit\Framework\TestCase;
require_once dirname(dirname(__FILE__)) . '..\..\app\Models\Event.php';
require_once dirname(dirname(__FILE__)) . '..\..\app\Classes\EventDAO.php';

class EventTest extends TestCase {

    protected $event;
    protected $eventDAO;

    protected function setUp(): void {
        $this->event = new Event();
        $this->eventDAO = new EventDAO();

        $this->event->setId(1);
        $this->event->setName('Festona');
        $this->event->setDescription('Vai ser doidera');
        $this->event->setPeople_quantity(100);
    }

    public function testIfFindAllEvents() {

        $expectedResult = 'roque@email.com';
        $expectedResult = 'roque@email.com';

        fwrite(STDERR, print_r($this->eventDAO->selectByCredentials($this->event), TRUE));

        $this->assertContains($expectedResult, $this->eventDAO->selectByCredentials($this->event));
    }
}
<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlcaldiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlcaldiasTable Test Case
 */
class AlcaldiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlcaldiasTable
     */
    public $Alcaldias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Alcaldias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Alcaldias') ? [] : ['className' => AlcaldiasTable::class];
        $this->Alcaldias = TableRegistry::getTableLocator()->get('Alcaldias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alcaldias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

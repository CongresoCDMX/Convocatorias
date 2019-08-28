<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParlamentoJuvenilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParlamentoJuvenilTable Test Case
 */
class ParlamentoJuvenilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParlamentoJuvenilTable
     */
    public $ParlamentoJuvenil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ParlamentoJuvenil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ParlamentoJuvenil') ? [] : ['className' => ParlamentoJuvenilTable::class];
        $this->ParlamentoJuvenil = TableRegistry::getTableLocator()->get('ParlamentoJuvenil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ParlamentoJuvenil);

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

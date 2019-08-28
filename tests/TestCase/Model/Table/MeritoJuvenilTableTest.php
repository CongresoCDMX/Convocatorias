<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeritoJuvenilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeritoJuvenilTable Test Case
 */
class MeritoJuvenilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MeritoJuvenilTable
     */
    public $MeritoJuvenil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MeritoJuvenil'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MeritoJuvenil') ? [] : ['className' => MeritoJuvenilTable::class];
        $this->MeritoJuvenil = TableRegistry::getTableLocator()->get('MeritoJuvenil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MeritoJuvenil);

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

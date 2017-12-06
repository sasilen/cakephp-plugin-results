<?php
namespace Results\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Results\Model\Table\ResultsTable;

/**
 * Results\Model\Table\ResultsTable Test Case
 */
class ResultsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Results\Model\Table\ResultsTable
     */
    public $Results;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.results.results',
        'plugin.results.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Results') ? [] : ['className' => ResultsTable::class];
        $this->Results = TableRegistry::get('Results', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Results);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

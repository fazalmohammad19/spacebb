<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtensionTables;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtensionTables Test Case
 */
class ExtensionTablesTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Extensions') ? [] : ['className' => 'App\Model\Table\ExtensionTables'];
        $this->ExtensionTables = TableRegistry::get('Extensions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtensionTables);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtensionRowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtensionRowsTable Test Case
 */
class ExtensionRowsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'ExtensionRows' => 'app.extension_rows',
        'ExtensionTables' => 'app.extension_tables',
        'ExtensionFields' => 'app.extension_fields',
        'DataDatetimes' => 'app.data_datetimes',
        'ExtensionData' => 'app.extension_data',
        'DataFloats' => 'app.data_floats',
        'DataInts' => 'app.data_ints',
        'DataTexts' => 'app.data_texts',
        'DataVarchars' => 'app.data_varchars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ExtensionRows') ? [] : ['className' => 'App\Model\Table\ExtensionRowsTable'];
        $this->ExtensionRows = TableRegistry::get('ExtensionRows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtensionRows);

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

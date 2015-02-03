<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DataIntsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DataIntsTable Test Case
 */
class DataIntsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'DataInts' => 'app.data_ints',
        'ExtensionFields' => 'app.extension_fields',
        'ExtensionTables' => 'app.extension_tables',
        'ExtensionRows' => 'app.extension_rows',
        'DataDatetimes' => 'app.data_datetimes',
        'ExtensionData' => 'app.extension_data',
        'DataFloats' => 'app.data_floats',
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
        $config = TableRegistry::exists('DataInts') ? [] : ['className' => 'App\Model\Table\DataIntsTable'];
        $this->DataInts = TableRegistry::get('DataInts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DataInts);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DataVarcharsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DataVarcharsTable Test Case
 */
class DataVarcharsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'DataVarchars' => 'app.data_varchars',
        'ExtensionFields' => 'app.extension_fields',
        'ExtensionTables' => 'app.extension_tables',
        'ExtensionRows' => 'app.extension_rows',
        'DataDatetimes' => 'app.data_datetimes',
        'ExtensionData' => 'app.extension_data',
        'DataFloats' => 'app.data_floats',
        'DataInts' => 'app.data_ints',
        'DataTexts' => 'app.data_texts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DataVarchars') ? [] : ['className' => 'App\Model\Table\DataVarcharsTable'];
        $this->DataVarchars = TableRegistry::get('DataVarchars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DataVarchars);

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

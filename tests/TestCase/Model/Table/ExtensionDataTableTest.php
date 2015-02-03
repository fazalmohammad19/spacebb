<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExtensionDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExtensionDataTable Test Case
 */
class ExtensionDataTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'ExtensionData' => 'app.extension_data',
        'ExtensionFields' => 'app.extension_fields',
        'ExtensionTables' => 'app.extension_tables',
        'DataDatetimes' => 'app.data_datetimes',
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
        $config = TableRegistry::exists('ExtensionData') ? [] : ['className' => 'App\Model\Table\ExtensionDataTable'];
        $this->ExtensionData = TableRegistry::get('ExtensionData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExtensionData);

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

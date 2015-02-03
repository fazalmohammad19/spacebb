<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ExtensionTablesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ExtensionTablesController Test Case
 */
class ExtensionTablesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'ExtensionTables' => 'app.extension_tables',
        'ExtensionFields' => 'app.extension_fields',
        'ExtensionData' => 'app.extension_data',
        'DataDatetimes' => 'app.data_datetimes',
        'DataFloats' => 'app.data_floats',
        'DataInts' => 'app.data_ints',
        'DataTexts' => 'app.data_texts',
        'DataVarchars' => 'app.data_varchars',
        'ExtensionRows' => 'app.extension_rows'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

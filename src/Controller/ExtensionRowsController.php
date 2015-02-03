<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtensionRows Controller
 *
 * @property \App\Model\Table\ExtensionRowsTable $ExtensionRows
 */
class ExtensionRowsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtensionTables']
        ];
        $this->set('extensionRows', $this->paginate($this->ExtensionRows));
        $this->set('_serialize', ['extensionRows']);
    }

    /**
     * View method
     *
     * @param string|null $id Extension Row id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extensionRow = $this->ExtensionRows->get($id, [
            'contain' => ['ExtensionTables', 'DataDatetimes', 'DataFloats', 'DataInts', 'DataTexts', 'DataVarchars']
        ]);
        $this->set('extensionRow', $extensionRow);
        $this->set('_serialize', ['extensionRow']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extensionRow = $this->ExtensionRows->newEntity();
        if ($this->request->is('post')) {
            $extensionRow = $this->ExtensionRows->patchEntity($extensionRow, $this->request->data);
            if ($this->ExtensionRows->save($extensionRow)) {
                $this->Flash->success('The extension row has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension row could not be saved. Please, try again.');
            }
        }
        $extensionTables = $this->ExtensionRows->ExtensionTables->find('list', ['limit' => 200]);
        $this->set(compact('extensionRow', 'extensionTables'));
        $this->set('_serialize', ['extensionRow']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Extension Row id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extensionRow = $this->ExtensionRows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extensionRow = $this->ExtensionRows->patchEntity($extensionRow, $this->request->data);
            if ($this->ExtensionRows->save($extensionRow)) {
                $this->Flash->success('The extension row has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension row could not be saved. Please, try again.');
            }
        }
        $extensionTables = $this->ExtensionRows->ExtensionTables->find('list', ['limit' => 200]);
        $this->set(compact('extensionRow', 'extensionTables'));
        $this->set('_serialize', ['extensionRow']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Extension Row id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extensionRow = $this->ExtensionRows->get($id);
        if ($this->ExtensionRows->delete($extensionRow)) {
            $this->Flash->success('The extension row has been deleted.');
        } else {
            $this->Flash->error('The extension row could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

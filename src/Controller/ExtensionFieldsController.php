<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtensionFields Controller
 *
 * @property \App\Model\Table\ExtensionFieldsTable $ExtensionFields
 */
class ExtensionFieldsController extends AppController
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
        $this->set('extensionFields', $this->paginate($this->ExtensionFields));
        $this->set('_serialize', ['extensionFields']);
    }

    /**
     * View method
     *
     * @param string|null $id Extension Field id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extensionField = $this->ExtensionFields->get($id, [
            'contain' => ['ExtensionTables', 'DataDatetimes', 'DataFloats', 'DataInts', 'DataTexts', 'DataVarchars']
        ]);
        $this->set('extensionField', $extensionField);
        $this->set('_serialize', ['extensionField']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extensionField = $this->ExtensionFields->newEntity();
        if ($this->request->is('post')) {
            $extensionField = $this->ExtensionFields->patchEntity($extensionField, $this->request->data);
            if ($this->ExtensionFields->save($extensionField)) {
                $this->Flash->success('The extension field has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension field could not be saved. Please, try again.');
            }
        }
        $extensionTables = $this->ExtensionFields->ExtensionTables->find('list', ['limit' => 200]);
        $this->set(compact('extensionField', 'extensionTables'));
        $this->set('_serialize', ['extensionField']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Extension Field id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extensionField = $this->ExtensionFields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extensionField = $this->ExtensionFields->patchEntity($extensionField, $this->request->data);
            if ($this->ExtensionFields->save($extensionField)) {
                $this->Flash->success('The extension field has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension field could not be saved. Please, try again.');
            }
        }
        $extensionTables = $this->ExtensionFields->ExtensionTables->find('list', ['limit' => 200]);
        $this->set(compact('extensionField', 'extensionTables'));
        $this->set('_serialize', ['extensionField']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Extension Field id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extensionField = $this->ExtensionFields->get($id);
        if ($this->ExtensionFields->delete($extensionField)) {
            $this->Flash->success('The extension field has been deleted.');
        } else {
            $this->Flash->error('The extension field could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

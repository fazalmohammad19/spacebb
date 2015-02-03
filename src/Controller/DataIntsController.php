<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataInts Controller
 *
 * @property \App\Model\Table\DataIntsTable $DataInts
 */
class DataIntsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ];
        $this->set('dataInts', $this->paginate($this->DataInts));
        $this->set('_serialize', ['dataInts']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Int id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataInt = $this->DataInts->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('dataInt', $dataInt);
        $this->set('_serialize', ['dataInt']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataInt = $this->DataInts->newEntity();
        if ($this->request->is('post')) {
            $dataInt = $this->DataInts->patchEntity($dataInt, $this->request->data);
            if ($this->DataInts->save($dataInt)) {
                $this->Flash->success('The data int has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data int could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataInts->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataInts->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataInt', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataInt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Int id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataInt = $this->DataInts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataInt = $this->DataInts->patchEntity($dataInt, $this->request->data);
            if ($this->DataInts->save($dataInt)) {
                $this->Flash->success('The data int has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data int could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataInts->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataInts->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataInt', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataInt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Int id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataInt = $this->DataInts->get($id);
        if ($this->DataInts->delete($dataInt)) {
            $this->Flash->success('The data int has been deleted.');
        } else {
            $this->Flash->error('The data int could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

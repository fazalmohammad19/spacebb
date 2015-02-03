<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataTexts Controller
 *
 * @property \App\Model\Table\DataTextsTable $DataTexts
 */
class DataTextsController extends AppController
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
        $this->set('dataTexts', $this->paginate($this->DataTexts));
        $this->set('_serialize', ['dataTexts']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Text id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataText = $this->DataTexts->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('dataText', $dataText);
        $this->set('_serialize', ['dataText']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataText = $this->DataTexts->newEntity();
        if ($this->request->is('post')) {
            $dataText = $this->DataTexts->patchEntity($dataText, $this->request->data);
            if ($this->DataTexts->save($dataText)) {
                $this->Flash->success('The data text has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data text could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataTexts->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataTexts->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataText', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataText']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Text id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataText = $this->DataTexts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataText = $this->DataTexts->patchEntity($dataText, $this->request->data);
            if ($this->DataTexts->save($dataText)) {
                $this->Flash->success('The data text has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data text could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataTexts->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataTexts->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataText', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataText']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Text id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataText = $this->DataTexts->get($id);
        if ($this->DataTexts->delete($dataText)) {
            $this->Flash->success('The data text has been deleted.');
        } else {
            $this->Flash->error('The data text could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}

<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtensionData Controller
 *
 * @property \App\Model\Table\ExtensionDataTable $ExtensionData
 */
class ExtensionDataController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtensionFields']
        ];
        $this->set('extensionData', $this->paginate($this->ExtensionData));
        $this->set('_serialize', ['extensionData']);
    }

    /**
     * View method
     *
     * @param string|null $id Extension Data id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extensionData = $this->ExtensionData->get($id, [
            'contain' => ['ExtensionFields', 'DataDatetimes', 'DataFloats', 'DataInts', 'DataTexts', 'DataVarchars']
        ]);
        $this->set('extensionData', $extensionData);
        $this->set('_serialize', ['extensionData']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extensionData = $this->ExtensionData->newEntity();
        if ($this->request->is('post')) {
            $extensionData = $this->ExtensionData->patchEntity($extensionData, $this->request->data);
            if ($this->ExtensionData->save($extensionData)) {
                $this->Flash->success('The extension data has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension data could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->ExtensionData->ExtensionFields->find('list', ['limit' => 200]);
        $this->set(compact('extensionData', 'extensionFields'));
        $this->set('_serialize', ['extensionData']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Extension Data id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extensionData = $this->ExtensionData->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extensionData = $this->ExtensionData->patchEntity($extensionData, $this->request->data);
            if ($this->ExtensionData->save($extensionData)) {
                $this->Flash->success('The extension data has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension data could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->ExtensionData->ExtensionFields->find('list', ['limit' => 200]);
        $this->set(compact('extensionData', 'extensionFields'));
        $this->set('_serialize', ['extensionData']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Extension Data id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extensionData = $this->ExtensionData->get($id);
        if ($this->ExtensionData->delete($extensionData)) {
            $this->Flash->success('The extension data has been deleted.');
        } else {
            $this->Flash->error('The extension data could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    public function test()
    {

    }
}

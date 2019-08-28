<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ParlamentoJuvenil Controller
 *
 * @property \App\Model\Table\ParlamentoJuvenilTable $ParlamentoJuvenil
 *
 * @method \App\Model\Entity\ParlamentoJuvenil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParlamentoJuvenilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $parlamentoJuvenil = $this->paginate($this->ParlamentoJuvenil);

        $this->set(compact('parlamentoJuvenil'));
    }

    /**
     * View method
     *
     * @param string|null $id Parlamento Juvenil id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parlamentoJuvenil = $this->ParlamentoJuvenil->get($id, [
            'contain' => []
        ]);

        $this->set('parlamentoJuvenil', $parlamentoJuvenil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $parlamentoJuvenil = $this->ParlamentoJuvenil->newEntity();
        if ($this->request->is('post')) {
            $parlamentoJuvenil = $this->ParlamentoJuvenil->patchEntity($parlamentoJuvenil, $this->request->getData());
            if ($this->ParlamentoJuvenil->save($parlamentoJuvenil)) {
                $this->Flash->success(__('Se realizo el registro correctamente!'));

                return $this->redirect(['action' => 'edit/'. $parlamentoJuvenil->id]);
            }
            $this->Flash->error(__('The parlamento juvenil could not be saved. Please, try again.'));
        }
        $this->set(compact('parlamentoJuvenil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Parlamento Juvenil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parlamentoJuvenil = $this->ParlamentoJuvenil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parlamentoJuvenil = $this->ParlamentoJuvenil->patchEntity($parlamentoJuvenil, $this->request->getData());
            if ($this->ParlamentoJuvenil->save($parlamentoJuvenil)) {
                $this->Flash->success(__('The parlamento juvenil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The parlamento juvenil could not be saved. Please, try again.'));
        }
        $this->set(compact('parlamentoJuvenil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Parlamento Juvenil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parlamentoJuvenil = $this->ParlamentoJuvenil->get($id);
        if ($this->ParlamentoJuvenil->delete($parlamentoJuvenil)) {
            $this->Flash->success(__('The parlamento juvenil has been deleted.'));
        } else {
            $this->Flash->error(__('The parlamento juvenil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

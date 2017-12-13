<?php
namespace Results\Controller;

use Results\Controller\AppController;

/**
 * Results Controller
 *
 * @property \Results\Model\Table\ResultsTable $Results
 *
 * @method \Results\Model\Entity\Result[] paginate($object = null, array $settings = [])
 */
class ResultsController extends AppController
{
		public function initialize()
		{
			parent::initialize();
    	$this->Auth->allow(['index']);
		}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
				$query = $this->request->getQueryParams();
				unset($query['direction']);
				unset($query['sort']);
				unset($query['page']);

        $results = $this->paginate($this->Results->find()->where([$query]));
				$dates = $this->Results->find()->select(['date'])->distinct(['date'])->where([$query])->order(['date'=>'desc'])->all();
				$leagues = $this->Results->find()->select(['league'])->distinct(['league'])->where([$query])->all();
				$clubs = $this->Results->find()->select(['club'])->distinct(['club'])->where([$query])->all();

        $races = $this->Results->find()->select(['race'])->distinct(['race'])->all();

        $this->set(compact('results','races','dates','leagues','clubs','query'));
        $this->set('_serialize', ['results','races','dates','leagues','clubs','query']);
    }

    /**
     * View method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('result', $result);
        $this->set('_serialize', ['result']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $result = $this->Results->newEntity();
        if ($this->request->is('post')) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Results->Users->find('list', ['limit' => 200]);
        $this->set(compact('result', 'users'));
        $this->set('_serialize', ['result']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Results->patchEntity($result, $this->request->getData());
            if ($this->Results->save($result)) {
                $this->Flash->success(__('The result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The result could not be saved. Please, try again.'));
        }
        $users = $this->Results->Users->find('list', ['limit' => 200]);
        $this->set(compact('result', 'users'));
        $this->set('_serialize', ['result']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $result = $this->Results->get($id);
        if ($this->Results->delete($result)) {
            $this->Flash->success(__('The result has been deleted.'));
        } else {
            $this->Flash->error(__('The result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

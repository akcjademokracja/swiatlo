<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Cache\Cache;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
        public $paginate = [
        'limit' => 8,
        'order' => [
            'Streams.kolejnosc' => 'asc'
        ]
    ];
      public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator', ['templates' => 'paginator-templates']);
   }
   
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;
		$this->loadModel('Streams');
	if ($_GET['pion']==1) { $where=''; $niemawhere=0; } else { $where='Streams.active=1'; $niemawhere=1; };
		if ($_GET['random']) { $order='RAND()'; $niemawhere=0; } else { 
			$order='Streams.kolejnosc asc';
		}
	 
/*
    
		if (($ilestreams = Cache::read('ilestreams')) === false) {
		$ilestreams=$this->Streams->find()->where('Streams.active=1')->all();
    Cache::write('ilestreams', $ilestreams);
}
*/
		 
		
					$streams=$this->Streams->find()->where(''.$where.'')->order(''.$order.'');
$ilestreams=count($streams);
$this->set('ilestreams', $ilestreams);
/*
		$streams = Cache::read('streams');
 		if (($streams = Cache::read('streams')) === false and $niemawhere==1) {
 $streams=$this->Streams->find()->where('Streams.active=1')->order(''.$order.'');
     Cache::write('streams', $streams);
}
else { 
			$streams=$this->Streams->find()->where(''.$where.'')->order(''.$order.'');

}
		
*/
		if ($_GET['streams']) { $streams->limit($_GET['streams']); $streamsow=$streams->count(); }
		if ($_GET['elements']=='all') { $_SESSION['limit']='';   $lim='all';  $this->set('limit', 'all');
 } else if ($_GET['elements']) { $_SESSION['limit']=$_GET['elements']; };
		if ($_SESSION['limit'] and !$lim) { 
			$this->paginate = [
        'limit' => $_SESSION['limit'],
        'order' => [
            'Streams.kolejnosc' => 'asc'
        ]
    ];
    $this->set('limit', $_SESSION['limit']);
	        $this->set('streams', $this->paginate($streams));
	} else if ($lim) { 
	        $this->set('streams', $streams);
	} else { 
			        $this->set('streams', $this->paginate($streams));

	}
/*
		$streamsow=$streams->count();
		$this->set('streamsow', $streamsow); 
*/     if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}

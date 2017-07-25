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

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager; // This line is required
use Cake\Cache\Cache;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout']);
    }

     public function index()
     {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    { 
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

  public function login()
  
{         
	if (!$this->czlek) {   
$this->layout='admin';
$this->set('nologin', 1);
}
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Zła nazwa lub hasło'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
           function adminstreams($id) { 
	      	if ($this->czlek) { 	
	      	$this->layout='admin';
	      		      	$this->set('adminStreamsActive', 'active');

 	 $this->loadModel('Streams');  
  $streams=$this->Streams->find()->order('Streams.kolejnosc desc')->all()->toArray();
	 $this->set('streams', $streams);
	 
	 
	  $skrypt=array('adminstreams');
	    $this->set('skrypt', $skrypt);
	    
	     }
 	    else { $this->layout='admin';
$this->set('nologin', 1); }
    }
    
   
   
     function userstreams($id) { 
	      	if ($this->czlek) { 	
	      	$this->layout='admin';
	      	$this->set('userStreamsActive', 'active');
 	 $this->loadModel('Streams');  
  $streams=$this->Streams->find()->where('Streams.owners=2')->order('Streams.kolejnosc asc')->all()->toArray();
	 $this->set('streams', $streams);
	 
	 
	  $skrypt=array('userstreams');
	    $this->set('skrypt', $skrypt);
	    
	     }
 	    else { $this->layout='admin';
$this->set('nologin', 1); }
    }
       



function streamupdate() { 
		$this->autoRender = false;
 
// my_connection is defined in your database config
$conn = ConnectionManager::get('default');
  $this->loadModel('Streams');

 


	
	if ($this->czlek['admin']==1) { 
		
		if ($_POST['funkcja']=='update') { 
	
	$update=$conn->execute('UPDATE streams set '.$_POST['co'].'="'.addslashes($_POST['wartosc']).'" where id='.$_POST['id'].'');
	$streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
			$ilestreams=$this->Streams->find()->where('Streams.active=1')->all();
    Cache::write('ilestreams', $ilestreams);

	}
		
		if ($_POST['funkcja']=='usun') { 
 	$update=$conn->execute('DELETE FROM streams  where id='.$_POST['id'].'');

$streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
  	 		$ilestreams=$this->Streams->find()->where('Streams.active=1')->all();
    Cache::write('ilestreams', $ilestreams);

		}
		
		if ($_POST['funkcja']=='active') { 
			
			 	$update=$conn->execute('UPDATE streams set active='.$_POST['co'].' where id='.$_POST['id'].''); 

 $streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
		$ilestreams=$this->Streams->find()->where('Streams.active=1')->all();
    Cache::write('ilestreams', $ilestreams);

		}
		
		if ($_POST['funkcja']=='useradd') { 
			
			$update=$conn->execute("INSERT INTO streams set name='".addslashes($_POST['name'])."', address='".addslashes($_POST['address'])."', owners=2");
$streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);
					$ilestreams=$this->Streams->find()->where('Streams.active=1')->all();
    Cache::write('ilestreams', $ilestreams);

			
		}
		
		if ($_POST['funkcja']=='add') { 
			
foreach ($_POST['streamname'] as $key=>$value) { 
 	$nazwa=$value;
	$adres=$_POST['streamaddress'][$key];
	$kolejnosc=$_POST['streamkolejnosc'][$key];
	$update=$conn->execute("INSERT INTO streams set name='".addslashes($nazwa)."', address='".addslashes($adres)."', kolejnosc='".$kolejnosc."', owners=1, pion=0, active=1,stream_id=1");
	
}    
$streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);

		}
		
	}
	
	
	
}









function eventupdate() { 
		$this->autoRender = false;
 
// my_connection is defined in your database config
$conn = ConnectionManager::get('default');
  $this->loadModel('Events');
$fb = new Facebook\Facebook([
  'app_id'                => '629376240546354',
  'app_secret'            => '2a9e30283480c33aa4f295b98a959d64',
  'default_graph_version' => 'v2.10',
]);

 


	
	if ($this->czlek['admin']==1) { 
		
		if ($_POST['funkcja']=='update') { 
	
	$update=$conn->execute('UPDATE events set '.$_POST['co'].'="'.addslashes($_POST['wartosc']).'" where id='.$_POST['id'].'');
	$events=$this->Events->find()->where('Events.active=1')->order('Events.kolejnosc asc');
     Cache::write('events', $events);
	 $ileevents=$this->Streams->find()->where('Events.active=1')->all();
    Cache::write('ileevents', $ileevents);

	}
		
		if ($_POST['funkcja']=='usun') { 
 	$update=$conn->execute('DELETE FROM events  where id='.$_POST['id'].'');
$events=$this->Events->find()->where('Events.active=1')->order('Events.kolejnosc asc');
     Cache::write('events', $events);
	 $ileevents=$this->Streams->find()->where('Events.active=1')->all();
    Cache::write('ileevents', $ileevents);

		}
		
		if ($_POST['funkcja']=='active') { 
			
			 	$update=$conn->execute('UPDATE events set active='.$_POST['co'].' where id='.$_POST['id'].''); 
$events=$this->Events->find()->where('Events.active=1')->order('Events.kolejnosc asc');
     Cache::write('events', $events);
	 $ileevents=$this->Streams->find()->where('Events.active=1')->all();
    Cache::write('ileevents', $ileevents);
    		}
		
		if ($_POST['funkcja']=='useradd') { 
			
			$update=$conn->execute("INSERT INTO events set name='".addslashes($_POST['name'])."', address='".addslashes($_POST['address'])."', owners=2");
$events=$this->Events->find()->where('Events.active=1')->order('Events.kolejnosc asc');
     Cache::write('events', $events);
	 $ileevents=$this->Streams->find()->where('Events.active=1')->all();
    Cache::write('ileevents', $ileevents);

			
		}
		
		if ($_POST['funkcja']=='add') { 
			
foreach ($_POST['eventid'] as $key=>$value) { 
	
	try {
  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
  // If you provided a 'default_access_token', the '{access-token}' is optional.
  $response = $fb->get('/'.$value.'', '104628140213092|s0QxRJeKfpogy5p8eR4wecXpF8o');
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();

/*

 	$nazwa=$value;
 	
 	
 		$update=$conn->execute("INSERT INTO events set name='".addslashes($nazwa)."', address='".addslashes($adres)."', kolejnosc='".$kolejnosc."', owners=1, pion=0, active=1,stream_id=1");
	
*/
}    
$streams=$this->Streams->find()->where('Streams.active=1')->order('Streams.kolejnosc asc');
     Cache::write('streams', $streams);

		}
		
	}
	
	
	
}



    /* SLIDES */
    
  function slides() { 
	    	$this->layout='admin';
	    	$this->set('slidesActive', 'active');
	    	if ($this->czlek['admin']==1) { 
		    	$skrypt=array('2dmin0/slides/slides');
	    $this->set('skrypt', $skrypt);

	      	$this->layout='admin';
	      	$this->loadModel('Slides'); 
$wyjazdy=$this->Slides->find('all', array('order'=>'Slides.published desc, Slides.kolejnosc asc'));
	 $this->set('slides', $wyjazdy); 	     }
	    else { $this->layout='admin';
$this->set('nologin', 1); }

    }
    
         

}






 
    
<?php namespace Shota\Schools\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Redirect;
use Mail;
use Input;

class SchoolController extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Shota.Schools', 'main-menu-item');
    }




    public function contact() {

    	$vars =['text' =>post('third'),'name'=>post('first'), 'surname'=>post('second')];

    	Mail::send('shota.schools::mail.contactform', $vars, function($message) {

    	$message->from('silagadzeshota@gmail.com', 'Applygeorgia');
    	$message->to('silagadzeshota@gmail.com');
    	$message->subject('კონტაქტი');
    	$message->replyTo('silagadzeshota@gmail.com',$name=null);

		});

    	return Redirect::to('/')->with('message', 'Your message has been sent');

    }

    public function apply() {

        $vars =['text' =>post('message'),'name'=>post('name'), 'email'=>post('email'),'date'=>post('date'),'country'=>post('country'),'level'=>post('level'),'program'=>post('program')];

        Mail::send('shota.schools::mail.applyform', $vars, function($message) {

        $message->from('silagadzeshota@gmail.com', 'Apply form');
        $message->to('silagadzeshota@gmail.com');
        $message->subject('APPLY');
        $message->replyTo(post('email'),$name=null);

        });

        return Redirect::to('/')->with('message', 'Your message has been sent');

    }






}
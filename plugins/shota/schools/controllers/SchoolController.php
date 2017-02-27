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

    	$message->from('info@applygeorgia.com', 'Applygeorgia');
    	$message->to('info@applygeorgia.com');
    	$message->subject('კონტაქტი');
    	$message->replyTo('info@applygeorgia.com',$name=null);

		});

    	return Redirect::to('/')->with('message', 'Your message has been sent');

    }

    public function apply() {

        $vars =['text' =>post('message'),'name'=>post('name'), 'email'=>post('email'),'date'=>post('date'),'country'=>post('country'),'level'=>post('level'),'program'=>post('program')];

        Mail::send('shota.schools::mail.applyform', $vars, function($message) {

        $message->from('info@applygeorgia.com', 'Apply form');
        $message->to('info@applygeorgia.com');
        $message->subject('APPLY');
        $message->replyTo(post('email'),$name=null);

        });

        return Redirect::to('/')->with('message', 'Your message has been sent');

    }






}
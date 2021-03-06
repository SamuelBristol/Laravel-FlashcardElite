<?php

class CardsController extends BaseController {
  
  protected $layout = 'layouts.master';
  
  public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
  }
  
  public function showIndex(){
    
    // get all cards from database
    $cards = Card::all();
    View::share('cards', $cards);
    
	$this->layout->content = View::make('cards.index');
  }
  
  public function insertCard(){
    $this->layout = null;
    $card = new Card;
    
    $card->name = Input::get('name');
    $card->desc = Input::get('desc');
    
    $card->save();
    
    // redirect to index
    return Redirect::to('/');
  }
  
  public function editCard($id){
    $card = Card::find($id);
    
    View::share('card', $card);
    
    $this->layout->content = View::make('cards.editCard');
  }
  
  public function deleteCard($id){
    $this->layout = null;
    
    $card = Card::find($id);
	$card->delete();

    return Redirect::to('/');    
  }
  
  public function newCard(){
    $this->layout->content = View::make('cards.newCard');
  }
  
  public function updateCard(){    
    $this->layout = null;
    
    $card = Card::find(Input::get('id'));
    $card->name = Input::get('name');
    $card->desc = Input::get('desc');
    
    $card->save();
    
    return Redirect::to('/');
  }
}
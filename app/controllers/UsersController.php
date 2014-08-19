<?php
 
class UsersController extends BaseController {
	protected $layout = 'layouts.master';
  	
  	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
      	
	}
  
    public function getRegister() {
      $this->layout->content = View::make('users.register');
    }
  	
  	public function getLogin() {
    	$this->layout->content = View::make('users.login');
	}
  
    public function getLogout() {
      Auth::logout();
      return Redirect::to('users/login')->with('message', 'You have been logged out successfully.');
    }
  	
    public function postCreate() {
      $rules = array(
        'username'=>'required|alpha|min:2|unique:users',
        'password'=>'required|alpha_num|between:6,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:6,12'
      );
      
      $validator = Validator::make(Input::all(), $rules);
      
      if($validator->passes()){
        $user = new User;
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        
        return Redirect::to('users/login')->with('message', 'Thanks for registering!');
      } else {
        //errors
        return Redirect::to('users/register')
          ->with('message', 'The following errors occurred')
          ->withErrors($validator)->withInput();
      }
    }
  	
    public function postSignin() {
      if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
        return Redirect::to('/')->with('message', 'You are now logged in!');
      } else {
        return Redirect::to('users/login')
          ->with('message', 'Your username/password combination was incorrect')
          ->withInput();
      }
    }
}
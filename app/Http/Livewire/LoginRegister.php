<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;


    public function render()
    {
        return view('livewire.login-register');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login() {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (\Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message','You are login successfully.');
        }else {
            session()->flash('error','email and password are wrong.');
        }
    }

    public function register() {
        $this->registerForm =!$this->registerForm;
    }

    public function registerStore() {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $this->password = Hash::make($this->password);

        User::create(['name'=> $this->name, 'email' => $this->email, 'password' => $this->password]);

        session()->flash('message','Your registration is successful');
       
        $this->resetInputFields();
    }

   
}


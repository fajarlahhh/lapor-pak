<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{

    public $uid, $kata_sandi, $referral_token, $remember = false;
    public $message;

    protected $rules = [
        'uid' => 'required',
        'kata_sandi' => 'required',
    ];

    public function login()
    {
        $this->validate();

        $remember = $this->remember == 'on';
        if (Auth::attempt(['uid' => $this->uid, 'password' => $this->kata_sandi], $remember)) {
            Auth::logoutOtherDevices($this->kata_sandi, 'kata_sandi');
            return redirect()->intended('backend');
        }
        $this->message = "<p class='text-theme-6'>UID atau Kata Sandi Salah!!!</p>";
        return;
    }

    public function updated()
    {
        $this->reset('message');
    }

    public function render()
    {
        return view('livewire.login');
    }
}

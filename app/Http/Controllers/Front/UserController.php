<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct() {
        $this -> middleware(middleware: 'auth') -> except (methods: 'showUserName ,showAdminName');
    }

    public function showAdminName() {
        return 'Hossin Habil';
    }

    public function showUserName() {
        return 'Hello User';
    }
}

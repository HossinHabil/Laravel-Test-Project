<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class NewUserController extends Controller
{
    public function getIndex() {
        $data = [];
        $data['Sname'] = 'Hossin';
        $data['age'] = 30;

        return view(view:'pages/about')-> with($data);
    }
}

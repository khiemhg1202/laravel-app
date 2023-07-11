<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        $infor = [
            'name' => 'Lê Nguyễn Kim Ngân',
            'age' => 23,
            'address' => 'CMT8 Q10',
        ];
        return view('pages.about',[
            'infor' => $infor
        ]);
        

    }

    public function contact () {
        $name = 'Thuy Duong';
        //return view('pages.contact')-> with('name',$name);

        //$friends = ['Khiem, Tram, Quynh, Thai Ngan'];
        $friends = [];
        return view ('pages.contact', [
            'friends' => $friends,
        ]);


        
    }
}

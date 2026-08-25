<?php

namespace App\Http\Controllers;

class SiteController extends Controller {
    public function index() {
        $name = 'Gabriel';
        $habits = ['Treinar', 'Estudar', 'Trabalhar', 'Jogar VALORANT'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}

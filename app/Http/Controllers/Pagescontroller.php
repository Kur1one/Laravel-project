<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class Pagescontroller extends Controller
{
    public function index(): string {
        $title = 'Welcome to the Backend course';
        return view('pages.index', compact('title'));
    }

    public function about(): string {
        $tit = [
            'title' => 'About us'
        ];
        return view('pages.about')->with($tit);
    }

    public function order(): string {
        $order = [
            'title' => 'Order'
        ];
        return view('pages.about')->with($order);
    }

    public function services(): string {
        $titll = [
            'title' => 'Services'
        ];
        return view('pages.services')->with($titll);
    }

    public function home(): string {
        $ti = [
            'title' => 'Framework'
        ];
        return view('pages.home')->with($ti);
    }

    public function signin(): string {
        $titl = [
            'title' => 'Sign In'
        ];
        return view('pages.signin')->with($titl);
    }

    public function registration(): string {
        $t = [
            'title' => 'Registration'
        ];
        return view('pages.registration')->with($t);
    }

    public function ourlocation(): string {
        $org = [
            'title' => 'Our location'
        ];
        return view('pages.ourlocation')->with($org);
    }


}

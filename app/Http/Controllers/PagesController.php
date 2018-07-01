<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Alex';
        $last = 'Curtis';

        $full = $first . ' ' . $last;
        $email = 'alex@jacurtis.com';

        return view('pages.about')->withFullname($full)->withEmail($email);
    }

    public function getContact() {
        return view('pages.contact');
    }

    public function postContact() {
    }
}

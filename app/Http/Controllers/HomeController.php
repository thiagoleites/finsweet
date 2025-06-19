<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) : View
    {
        return view('site.home', [
            'name'        => 'John Doe',
            'role'        => 'Content Write @Company',
            'photo'       => asset('images/avatars/gravatar.png'),
            'socialLinks' => [
                'facebook'  => 'https://facebook.com/johndoe',
                'twitter'   => 'https://twitter.com/johndoe',
                'instagram' => 'https://instagram.com/johndoe',
                'linkedin'  => 'https://linkedin.com/in/johndoe'
            ]
        ]);
    }
}

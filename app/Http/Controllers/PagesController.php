<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function postForm(Request $request) {
        $token = $request->input('g-recaptcha-response');

        if ($token) {
            $client = new Client();
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => array(
                    'secret'    => '',
                    'response'  => $token
                )
            ]);
            $results = json_decode($response->getBody()->getContents());
        } else {
            return redirect('/');
        }


    }

}

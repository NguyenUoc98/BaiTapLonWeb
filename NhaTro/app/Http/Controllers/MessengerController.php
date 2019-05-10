<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function index()
    {
        // verify webhook
        $this->verifyAccess();
    }

    protected function verifyAccess()
    {
        // set webhook token in env file
        $local_token = env('FACEBOOK_MESSENGER_WEBHOOK_TOKEN');
        $challenge = $_REQUEST['hub_challenge'];
        $verify_token = $_REQUEST['hub_verify_token'];

        if ($verify_token === 'facebook_messenger_api') {
            echo $challenge;
        }
    }
}
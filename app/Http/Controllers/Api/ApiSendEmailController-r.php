<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use IPFSoftwares\MailSender\Mail;
use IPFSoftwares\Greetings\Greetr;

class ApiSendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $email = new Greetr();
        $sendEmail = $email->greet('mkawa');
        $data = [
            'data' => $request->all(),
            'email' => $sendEmail,
        ];

        return response([
            'success' => true,
            'message' => 'Email sent',
            'data' => $data,
        ], 200);
    }
}

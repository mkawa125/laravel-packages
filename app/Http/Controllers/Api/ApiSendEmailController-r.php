<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiSendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'data' => $request->all(),
        ];

        return response([
            'success' => true,
            'message' => 'Email sent',
            'data' => $data,
        ], 200);
    }
}

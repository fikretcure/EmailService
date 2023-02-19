<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShippedRequest;
use App\Mail\LoginShipped;
use Illuminate\Support\Facades\Mail;

class ShippedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShippedRequest $request)
    {
        if ($request->type == "login") {
            Mail::to($request->validated("emails"))->queue(new LoginShipped($request->all()));
        }

        return "Mail Gönderme İsteği Alındı";
    }
}

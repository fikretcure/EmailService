<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShippedRequest;
use App\Mail\LoginShipped;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ShippedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ShippedRequest $request)
    {
        Mail::to("fikretcure@gmail.com")
            ->queue(new LoginShipped());

        return "Mail Gönderme İsteği Alındı";
    }
}

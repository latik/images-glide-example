<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetImage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $name)
    {
        dump($name);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImage extends Controller
{
    /**
     * Handle the incoming image upload request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $request->file('image')->store('images');
    }
}

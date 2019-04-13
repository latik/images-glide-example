<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

class GetImage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param string $path
     * @param Filesystem $filesystem
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $path, Filesystem $filesystem, Request $request)
    {
        $imagesPath = 'images';

        $server = ServerFactory::create([
            'response' => new LaravelResponseFactory($request),
            'source' => $filesystem->getDriver(),
            'source_path_prefix' => $imagesPath,
            'cache' => $filesystem->getDriver(),
            'cache_path_prefix' => '.cache',
            'base_url' => $imagesPath,
        ]);

        return $server->getImageResponse($path, request()->all());
    }
}

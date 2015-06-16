<?php

namespace App\Http\Controllers;

use Cache;
use File;
use Response;

class PreviewController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Preview Controller
    |--------------------------------------------------------------------------
    |
    |
    */

    public static $mimeTypes = [
        'txt' => 'text/plain',
        'htm' => 'text/html',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'swf' => 'application/x-shockwave-flash',
        'flv' => 'video/x-flv',

        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
        'bmp' => 'image/bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml',

        'zip' => 'application/zip',
        'rar' => 'application/x-rar-compressed',

        'otf' => 'application/x-font-opentype',
        'eot' => 'application/vnd.ms-fontobject',
        'ttf' => 'application/x-font-ttf',
        'woff' => 'application/font-woff',
        'woff2' => 'application/font-woff2',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMimeTypeByPath($path)
    {
        $fileInfo = pathinfo($path);
        return self::$mimeTypes[$fileInfo['extension']];
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('index');
    }

    public function getUri($uri = '') 
    {

        //dd($uri);

        if (!$uri) {
            return Redirect::to('preview/inspinia/index.html');
        }

        $resourcesPath = realpath(base_path('resources/'));

        $filePath = $resourcesPath.'/preview/'.$uri;

        $response = Cache::rememberForever('preview_html:'.$filePath, function() use($filePath) {

            $mimeType = $this->getMimeTypeByPath($filePath);
            $response = Response::make(File::get($filePath), 200);
            $response->header('Content-Type', $mimeType);
            return $response;

        });

        return $response;
    }

}

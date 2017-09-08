<?php

namespace App\Http\Controllers\Api;

use App\Services\GiphyService;
use App\Http\Controllers\Controller;

class GifController extends Controller
{
    /**
     * @var GiphyService
     */
    private $giphy;

    /**
     * GifController constructor.
     * @param GiphyService $giphy
     */
    public function __construct(GiphyService $giphy)
    {
        $this->giphy = $giphy;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function random()
    {
        $res = $this->giphy->random(request('search'), request('rating'));

        if($res['success']) {
            return response()->json([
                'success' => true,
                'data'    => $res['data'],
            ]);
        }

        return response()->json([
            'success' => false,
        ], 400);
    }
}

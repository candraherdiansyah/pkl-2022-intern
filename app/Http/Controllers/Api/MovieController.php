<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function allMovie()
    {
        $movies = Movie::all();
        $response = [
            'success' => true,
            'message' => 'berhasil',
            'data' => $movies,
            'status' => 200,
        ];
        return response()->json($response);
    }

    public function singleMovie($id)
    {
        $movies = Movie::find($id);
        if ($movies) {
            $response = [
                'success' => true,
                'message' => 'data berhasil ditemukan',
                'data' => $movies,
                'status' => 200,
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'data tidak ditemukan',
                'status' => 404,
            ];
        }
        return response()->json($response);
    }
}

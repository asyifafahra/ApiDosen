<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => [
                ['id' => 1, 'name' => 'Syifa'],
                ['id' => 2, 'name' => 'Budi'],
                ['id' => 3, 'name' => 'Siti'],
                ['id' => 4, 'name' => 'Tono'],
                ['id' => 5, 'name' => 'Joko'],
                ['id' => 6, 'name' => 'Dewi'],
            ]
        ]);
    }
}

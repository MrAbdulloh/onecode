<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
//        return response('test', 200, [
//            'foo' => 'bar'
//        ]);
        return ['foo' => 'bi'];
    }
}

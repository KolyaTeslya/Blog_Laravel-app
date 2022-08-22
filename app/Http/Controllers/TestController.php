<?php

namespace App\Http\Controllers;

use App\Components\SuperComponent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testProvider(SuperComponent $component)
    {
        return view('provider',[
            'name' => $component->getName(),
            'property' => $component->getProperty()
        ]);
    }
}

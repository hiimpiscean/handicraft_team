<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function index(){

        $room = [];
        if (Session::has('room')) {

            $room = Session::get('room');
        } else {

            $room = [
                ['id' => 1,
                    'ten' => 'C1808G',
                    'date' => '17/08/2018',
                    'size' => 24
                ],
                ['id' => 2,
                    'ten' => 'C19091',
                    'date' => '03/09/2019',
                    'size' => 15
                ],
                ['id' => 3,
                    'ten' => 'C2010G3',
                    'date' => '07/10/2020',
                    'size' => 20
                ],
                ['id' => 4,
                    'ten' => 'C2108G1',
                    'date' => '23/08/2021',
                    'size' => 22
                ]
            ];
            Session::put('room', $room);
        }

        return view('class.index', ['room' => $room]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function store(Request $request) {
        $data = json_decode($request->data, true)[0];

        $member = Member::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'level' => $data['level'],
        ]);
    
        return array('id' => $member->id);
    }
}

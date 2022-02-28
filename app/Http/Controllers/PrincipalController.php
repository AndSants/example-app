<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectOption;

class PrincipalController extends Controller
{
    public function principal()
    {
        $title = 'Home';
        $reason_contacts = SelectOption::where('name', '=', 'reason_contact')
                                        ->get();
        return view('site.principal', compact('title', 'reason_contacts'));
    }
}

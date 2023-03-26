<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profire.create');
    }
    
    public function create()
    {
        return redirect('admin/plofile/create');
    }
    
    public function edit()
    {
        return view('admin.plofile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profire/edit');
    }
}

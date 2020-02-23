<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreFormRequest;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ProcessController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexlogin()
    {
        return redirect('login');
    }

    public function homepage()
    {
        return view('pages.form');
    }

    public function showForm()
    {
        return view('pages.form');
    }

    public function store(StoreFormRequest $request)
    {
        $data = $request->all();

        $request->user()->update($data);

        Session::flash('message', "Form saved!");

        return redirect("/form");
    }

    public function charts()
    {
        return view('pages.charts');
    }
}

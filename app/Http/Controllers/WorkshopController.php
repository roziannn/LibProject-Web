<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // all
    public function index()
    {

        $datas = Workshop::all();
        return view('workshops.index', compact('datas'));
    }
    public function show(Workshop $workshop)
    {
        return view('workshops.show', ["workshop_name" => "Single Post","active" => 'workshop', "workshop" => $workshop
        ]);
    }

    // user only
    public function user_workshop()
    {
        return view('workshops.dashboard-user', [ 'workshop' => Workshop::where('id', auth()->user()->id)->get()
        ]);
    }

    // admin only
    public function dashboard_workshop()
    {
        $datas = Workshop::all();
        return view('workshops.dashboard', compact('datas'));
    }

    public function create()
    {
        return view('workshops.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Workshop::create($request->all());

        $validatedData = $request->validate([
            'token' => 'required',
            'workshop_name'=> 'required|max:255',
            'workshop_type'=>'required',
            'workshop_fee'=> 'required',
            'workshop_img'=> 'image|file|max:2000',
            'desc'=> 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'workshop_status'=> 'required',
            'member_join'=> 'required',
            'slug'=> 'required',
        ]);

        if ($request->file('workshop_img')) {
            $validatedData['workshop_img'] = $request->file('workshop_img')->store('workshop-images');
        }
        

        Workshop::create($validatedData);

        $request->accepts('session');
        session()->flash('success', 'Berhasil menambahkan data!');

        return back();
    }

    public function checkSlug(Request $request)
    {

        $slug = SlugService::createSlug(Workshop::class, 'slug', $request->workshop_name);
        return response()->json(['slug' => $slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;

// use library here
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// use everything here
// use Gate;
use Auth;

use App\Models\User;
use App\Models\Operational\RequestEvent;
use app\Models\MasterData\Category;

class AddEventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');

        
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('name', 'asc')->get();

        return view('pages.frontsite.master-data.event.index', compact('event', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = Category::orderBy('name', 'asc')->get();

        $request_event = new RequestEvent;
        $request_event->user_id = Auth::user()->id;
        $request_event->category_id = $data['category_id'];
        $request_event->name = $data['name'];
        $request_event->instance = $data['instance'];
        $request_event->date = $data['date_is_held'];
        $request_event->invite_group_link = $data['invite_group_link'];
        $request_event->description = $data['description'];
        $request_event->poster = $data['poster'];
        $request_event->time = $data['time'];
        $request_event->status = 2; // set to verification
        $request_event->save();

        return redirect()->route('adedd-success', $request_event->id);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::orderBy('name', 'asc')->get();
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use App\Models\Zone_file;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zone = Zone::whereId($id)->first();
        $headers = Zone_file::where('parent_id',null)->where('zone_id',$id)->get();
        $data = Zone_file::whereId('zone_id',$id)->get();
        return view('admin.zones.index',compact('zone','headers','data'));
    }

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
        $data = $this->validate(\request(),
            [
                'file' => 'required',
            ]);
        Zone_file::where('id',$id)->update([
            'file' => $request->file,
        ]);
        return redirect()->back()->with('success', 'File updated');
    }
    public function update_progress(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'progress' => 'required',
            ]);
        Zone::where('id',$id)->update([
            'progress' => $request->progress,
        ]);
        return redirect()->back()->with('success', 'progress updated');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\webuser;

class Log_InController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $alldata = webuser::paginate(5);
        return view('Jakaria_Parvez.index',compact('alldata'));
    }
    public function pori()
    {
        $alldata = webuser::paginate(5);
        return view('index',compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Jakaria_Parvez.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input= $request->all();
        webuser::create($input);
        return redirect('nondon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $userData = webuser::findOrFail($id);
        return view('Jakaria_Parvez.edit',compact('userData'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $data = webuser::findOrFail($id);
        $data->update($input);

        return redirect('nondon');
    }

    public function order(Request $request, $id)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $data = webuser::findOrFail($id);
        $data->delete();

        return redirect('nondon');
    }
}

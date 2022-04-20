<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Http\Requests\DataRequest;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Data::query();
        if (\request()->search)
            $items = $items->where('en', 'like', '%' . \request()->search . '%')
                ->orWhere('uz', 'like', '%' . \request()->search . '%')
                ->orWhere('text', 'like', '%' . \request()->search . '%');
        $items = $items->latest()->paginate(50);
        return view('data.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = null;
        return view('data.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        $data = $request->validated();
        Data::create($data);
        return redirect()->route('data.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Data::findOrFail($id);
        return view('data.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Data::findOrFail($id);
        return view('data.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DataRequest $request, $id)
    {
        $data = $request->validated();
        $item = Data::findOrFail($id);
        $item->update($data);
        return redirect()->route('data.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Data::findOrFail($id);
        $item->delete();
        return redirect()->route('data.index');
    }
}

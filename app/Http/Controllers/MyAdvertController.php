<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Advert;
use App\Models\Category;

class MyAdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $adverts = Advert::all()->where('user_id', $userId);
        return view('adverts.myadvert', compact('adverts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advert = new Advert();
        $categories = Category::all();
        $userId = Auth::user()->id;
        return view('adverts.create', compact('advert','categories','userId'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Advert $advert)
    {
        $advert->fill($request->all());
        $advert->user_id = auth()->user()->id;
        $advert->saveOrfail();
        if ($advert->exists) {
            return redirect()->route('myadverts.index', $advert->id)
            ->with(['success'=>'Сохранение выполнено']);
        }
        else {
            return back()->withErrors(['msg'=>'Ошибка сохранения'])
            ->withInput();
        }
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
        $advert = Advert::findOrFail($id);
        return view('adverts.edit', compact('advert'));
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
        $advert = Advert::find($id);
        if (empty($advert)) {
            return back()
                ->withErrors(['msg'=>'Запись {$id} не найдена'])
                ->withInput();
        }
        $data = $request->input();
        $result = $advert->update($data);
        if($result) {
            return redirect()
            ->route('myadverts.edit', $advert->id)
            ->with(['success'=>'Сохранение выполнено']);
        }
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

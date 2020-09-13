<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
//        $pizzas = Pizza::orderBy('price','ASC')->paginate(5);
        $pizzas = DB::table('pizzas')->select('*')->paginate(15);
        return view('pizza.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. get the data from html form
        $data = $request->only(['name', 'price']);
        //2. store into DB
//        Pizza::create([
//            'name' => $data['name'],
//            'price' => $data['price']
//        ]);
        // alternative
        Pizza::create($data);
//        Pizza::create($data);
//        session()->flash('success','Data Created!!');
        return redirect()->route('pizza.index')->with('success', "Data Created!!");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Pizza $pizza)
    {
        return view('pizza.show', compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Pizza $pizza)
    {
        return view('pizza.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Pizza $pizza
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Pizza $pizza)
    {
        // get the data from html
        $data = $request->only(['name', 'price']);
        // update the info or data
        $pizza->update($data);
        //alternative
//        $pizza->update(
//            [
//                'name'=>$data['name'],
//                'price'=>$data['price']
//            ]
//        );
        session()->flash('success', 'Data Updated!!');
        return redirect()->route('pizza.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        session()->flash('success', 'Data Deleted!!');
        return redirect()->back();

    }
}

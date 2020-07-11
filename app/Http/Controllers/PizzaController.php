<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->get('name');
        $price = request()->get('price');
        if ($search) {

            if ($price){
                $pizzas = Pizza::where("name", "LIKE", "%{$search}%")->where('price',$price)->paginate(5);
                return view('pizza.index', compact('pizzas'));
            }
           else{
               $pizzas = Pizza::where("name", "LIKE", "%{$search}%")->orWhere("price", "LIKE", "%{$search}%")->orderBy('price','ASC')->paginate(5);
               return view('pizza.index', compact('pizzas'));
           }

        }
        $pizzas = Pizza::orderBy('price','ASC')->paginate(5);
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
        Pizza::create([
            'name' => $data['name'],
            'price' => $data['price']
        ]);

//        Pizza::create($data);
//        session()->flash('success','Data Created!!');
        return redirect()->route('pizza.index')->with('success', "Data Created!!");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        // get the data from html
        $data = $request->only(['name', 'price']);
        // update the info or data
        $pizza->update($data);
        session()->flash('success', 'Data Updated!!');
        return redirect()->route('pizza.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Pizza $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        session()->flash('success', 'Data Deleted!!');
        return redirect()->route('pizza.index');

    }
}

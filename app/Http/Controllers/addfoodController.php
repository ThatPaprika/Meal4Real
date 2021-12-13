<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\DB;


class AddFoodController extends Controller
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
        $user = new Meal;
        $user->type = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save())
            return back()->with('success', 'User was created successfully');
        else
            return back()->with('error', 'Problem creating the user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validations
        $request->validated();

        $food = new Food;
        $food->type = $request->type;
        $food->meal_name = $request->meal_name;
        $food->description = $request->description;
        $food->adress = $request->adress;


        
        $validated = $request->validate([
            
                'type' =>'required|string|min:10|max:100',
                'meal_name' => 'required|string|min:10|max:30',
                'description'=> 'required|string|min:50|max:200',
                'adress'=>'required|string|min:20|max:100'            
        ]);

        
        // STILL TO CHANGE !!!!!!

        $result = DB::insert("INSERT INTO meal_details (type, meal_name, description, adress) VALUES(?, ?, ?, ?)", [$request->type, $request->meal_name, $request->description,$request->adress,]);

        if ($food->save())
            return back()->with('success', 'Your food was added succesfully');
        else
            return back()->with('error', 'Something went wrong adding your food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);

        return view('food_details', ['food' => $food]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);

        return view('add_food', ['food' => $food]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFoodRequest $request, $id)
    {
        // Validations
        $request->validated();

        $food = Food::find($id);
        $food->type = $request->type;
        $food->meal_name = $request->meal_name;
        $food->type = $request->type;

        if ($food->save())
            return back()->with('success', 'Updated in the DB');
        else
            return back()->with('error', 'Something wrong with the DB');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$food= Food::find($id);
        $food->delete();*/

        $result = Food ::destroy($id);

        if ($result)
            return back()->with('success', 'Book was deleted from the DB');
        else
            return back()->with('error', 'Something wrong with the DB.');
    }
}

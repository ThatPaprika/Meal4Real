<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFoodRequest;
use Illuminate\Http\Request;
use App\Models\Food;

class AddFoodController extends Controller
{
    //predefined error message 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::all();

        return view('food_list', ['food' => $food]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_food');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
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

        $result = DB::insert("INSERT INTO meal_details (type, meal_name, description, adress) VALUES(?, ?)", [$request->type, $request->meal_name, $request->description,$request->adress,]);

        if ($food->save())
            return back()->with('success', 'Your food was added succesfully');
        else
            return back()->with('error', 'Something wrong with the DB.');
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

        return view('food_detail', ['food' => $food]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Food::find($id);

        return view('edit-book', ['food' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBookRequest $request, $id)
    {
        // Validations
        $request->validated();

        $book = Book::find($id);
        $book->title = $request->title;
        $book->price = $request->price;
        $book->type = $request->type;

        if ($book->save())
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
        /*$book = Book::find($id);
        $book->delete();*/
        $result = Book::destroy($id);

        if ($result)
            return back()->with('success', 'Book was deleted from the DB');
        else
            return back()->with('error', 'Something wrong with the DB.');
    }
}

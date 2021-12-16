<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;
use App\Models\Food;
use App\Models\Meal;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AddFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //shows food in the food List
    public function index()
    {
        //$meals = DB::select('SELECT * FROM meal_details');
        $meals = DB::table('meal_details')->where('reserved', false)->get();
        return view('food_list', ['meals' => $meals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-food');
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

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->meal_picture->extension();

        // Save the public path
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->meal_picture->move($publicPath, $fileName);

        $meal_details = new Meal;
        $meal_details->type = $request->type;
        $meal_details->meal_name = $request->meal_name;
        $meal_details->description = $request->description;
        $meal_details->address = $request->address;
        $meal_details->picture = $fileName;
        $meal_details->user_id = Auth::id();

        if ($meal_details->save())
            return back()->with('success', 'Updated in the DB');
        else
            return back()->with('error', 'Something wrong with the DB');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meal_details = Meal::find($id);

        return view('detail_page', ['meal_details' => $meal_details]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal_details = Meal::find($id);

        return view('add-food', ['meal_details' => $meal_details]);
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

        $meal_details = Meal::find($id);
        $meal_details->type = $request->type;
        $meal_details->meal_name = $request->meal_name;
        $meal_details->description = $request->description;
        $meal_details->address = $request->address;
        $meal_details->picture = $request->picture;
        $meal_details->user_id = Auth::id();

        if ($meal_details->save())
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

        $result = Meal::destroy($id);

        if ($result)
            return back()->with('success', 'Meal was deleted from the DB');
        else
            return back()->with('error', 'Something wrong with the DB.');
    }

    public function reservation($id,$request,$message)
    {
        Meal::where('id', $id)->update(['reserved' => true]);

        $date = new DateTime('now');
        $interval = $date->add(new DateInterval('PT1M'));

        if ($interval) {
            Meal::where('id', $id)->update(['reserved' => false]);
        }

        return view('thank_you');
    
    }

    
}

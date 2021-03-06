<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFoodRequest;
use App\Models\Food;
use App\Models\Meal;
use App\Models\CustomUser;
use App\Models\User;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Http\Controllers\ContentTypes\Timestamp;
use Illuminate\Support\Facades\Mail;

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

        //$userEmail = 
        //dd($userEmail);
        $reservedMeals = DB::table('meal_details')->where('reserved', true)->get();

        // If the meal is not picked up after a certain time (60 minutes), the meal should dislay ind the food list again
        // Time out timer set for 1 minute, demonstration pourpose only
        foreach ($reservedMeals as $reservedMeal) {

            $reservedTime = $reservedMeal->updated_at;
            $reservedTimeTimestamp = strtotime($reservedTime) + 60 * 1;


            if ($reservedTimeTimestamp < strtotime("now")) {

                Meal::where('id', $reservedMeal->id)->update(['reserved' => false]);
            }
        }

        // If the meal is not picked up after 72 hours, remove the meal from the food list
        /*
        foreach ($reservedMeals as $reservedMeal) {

            $postedTime = $reservedMeal->created_at;
            $mealDeadline = strtotime($postedTime) + 60 * 20;


            if ($mealDeadline < strtotime("now")) {

                Meal::where('id', $reservedMeal->id)->update(['reserved' => true]);
            }
        }*/

        // Display all the meals available
        $meals = DB::table('meal_details')->where('reserved', false)->get();



        foreach ($meals as $key => $meal) {
            $address = $meal->address;
            $response = Http::get("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Belval%2Luxembourg&destinations={$address}&departure_time=now&key=AIzaSyBHA9Ke8jAvquu2NgeobB2S2NSToZFs_WA");

            $meal->distance =  $response->object()->rows[0]->elements[0]->distance->text;
            $meal->time =  $response->object()->rows[0]->elements[0]->duration_in_traffic->text;
        }

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
            return redirect('/food_list');
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

    public function reservation($id)
    {

        Meal::where('id', $id)->update(['reserved' => true]);

        $user = CustomUser::where('id', Auth::id())->first();
        $userFirstName = $user->first_name;
        //dd($userFirstName);

        $homeCook = DB::table('meal_details')
            ->join('users', 'user_id', '=', 'users.id')
            ->select('email')
            ->get();
        //dd($homeCook);

        $meal_details = Meal::find($id);
        $mealAddress = $meal_details->address;
        $pickUpMessage = '
            Hey !

            Dear ' . $userFirstName . ',
            You chose the following meal to pick up: '

            . $meal_details->type . ', ' . $meal_details->meal_name . ', ' . $meal_details->description .

            ' Please pick your meal up at the following address: '

            . $mealAddress .

            ' Thank you very much for picking up ' . $meal_details->meal_name . '!
            Hope to see you again Foodie!';


        /*
        $homeCookMessage = '
            Hey ! '

            . $userFirstName .  ' has reserved your meal and will pick it up in the next 60 minutes.
        
            If ' . $userFirstName . ' won\'t show up, your meal will go back to the "Food List".
        
            We would just like to inform you:
            That your meal won\'t show up in the "Food List" 48 hours after it\'s first
            appearence on our site.
        
            Thank you very much for sharing your meal!
            Hope to see you again Chef ' . $homeCook->first_name . '!';
            */


        // send the emails

        // email to pick up food
        $data = array('name' => "Meal4Real Team%");
        // Path or name to the blade template to be rendered
        $template_path = 'email_template_pick_up';

        Mail::send([], $data, function ($message) use ($user, $userFirstName, $pickUpMessage) {

            // Set the receiver and subject of the mail.
            $message->to($user->email, $userFirstName)->subject('Your meal pick up details');
            // Set the sender
            $message->from('meal4realproject@gmail.com', 'Meal4Real Team');
            $message->setBody($pickUpMessage);
        });

        /*
        // email for the homecook
        $data = array('name' => "Meal4Real Team");
        // Path or name to the blade template to be rendered
        $template_path = 'email_template_meal_gone';

        Mail::send(['text' => $template_path], $data, function ($message) use ($homeCook, $homeCookMessage) {
            // Set the receiver and subject of the mail.
            $message->to($homeCook->email, 'Receiver Name')->subject('Someone will pick up your meal');
            // Set the sender
            $message->from('meal4realproject@gmail.com', 'Meal4Real Team');
            $message->setBody($homeCookMessage);
        });
        */

        return redirect('thank_you');
        //$email = Auth::user()->email;
        //dd($email);

        /*
        // the message
        $msg = "Dear\nThank you for picking up " . $meal_details->meal_name .  "." . "\nWe appreciate your help to reduce food waste.\nHere are the details of your meal: \n" . $meal_details->picture . "\nFood type:" . $meal_details->type . "\nName:" . $meal_details->meal_name . "\nDescription:" . $meal_details->description . "\nAddress:" . $meal_details->address . "Be aware! You only have 1 hour to pick up your meal, before your reservation is canceled!\n\nWe hop to see you soon.\n\nEnjoy your meal!\nSincerely, your Meal4Real Team ;-)";

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

        // send email
     
        mail($email, "Your meal pick up ;-)", $msg);

        return view('thank_you');
        */
    }
}

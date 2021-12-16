<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\CustomUser;
use App\Models\Meal;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Upload : Display the form
    public function upload_file()
    {
        return view();    // edit user information
    }

    // Submit the form
    public function upload_file_submit(Request $request)
    {
        // File validation
        $request->validate([
            'myFile' => 'required|mimes:jpeg,jpg,jfif,png,pdf'
        ]);

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->myFile->extension();

        // Save the public path
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (is_numeric($id)) {
            //$books = DB::select('SELECT b.*, a.first_name, a.last_name FROM books b JOIN authors a ON b.author_id = a.id  WHERE b.id = ?', [$id]);
            $user = CustomUser::where('id', $id)->first();

            return view('profile', ['users' => $user]);
        }
    }

    public function showUserInformation() {

        $user = CustomUser::where('id', Auth::id())->first();
        $pickups = Meal::where('user_id', Auth::id())->limit(5)->get();

        return view('profile', ['users' => $user, 'pickups' => $pickups]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit()
    {
        $user = CustomUser::find(Auth::id());
        
        return view('edit-user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        //$result = CustomUser::update('UPDATE users SET first_name = ? WHERE id = ?', [$request->title, Auth::id()]);
        //return 'Update in the DB';

        //$request->validated();

        $user = CustomUser::find(Auth::id());
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->street_nr = $request->street_nr;
        $user->street_name = $request->street_name;
        $user->zip_code = $request->zip_code;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone_number = $request->phone_number;

        $user->save();


        $user = CustomUser::find(Auth::id());
        return view('profile', ['users' => $user]);

    
        //$user = CustomUser::find(Auth::id());

        //$user->first_name = $request->first_name;
        
        /*
        $user->last_name = $request->last_name;

        $user->email = $request->email;

        $user->street_nr = $request->street_nr;

        $user->street_name = $request->street_name;

        $user->zip_code = $request->zip_code;

        $user->city = $request->city;

        $user->country = $request->country;

        $user->phone_number = $request->phone_number;
        */
        //$user->save();


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
        $result = CustomUser::destroy($id);

        if ($result)
            return back()->with('success', 'User was deleted from the DB');
        else
            return back()->with('error', 'Something went wrong with the DB.');
    }
}

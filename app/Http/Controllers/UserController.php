<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Models\CustomUser;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_submit(Request $request)
    {
        session(['email' => $request->email, 'password' => $request->password]);

        return 'Login successfully';
    }

    // Upload : Display the form
    public function upload_file()
    {
        return view('register');
    }
    /*
    // Submit the form
    public function upload_file_submit(Request $request)
    {
        // File validation
        $request->validate([
            'myFile' => 'required|mimes:jpeg,pdf'
        ]);

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->myFile->extension();

        // Save the public path
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);
    }
*/
    // Register : 
    public function register()
    {
        return view('register');
    }

    public function register_submit(StoreUserRequest $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',


        ]);

        $user = new CustomUser;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save())
            return back()->with('success', 'User was created successfully');
        else
            return back()->with('error', 'Problem creating the user');
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

            return view('user-account', ['users' => $user]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = CustomUser::find($id);

        return view('edit-user', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        $user = CustomUser::find($id);

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

        if ($user->save()) {
            return back()->with('success', 'Inserted in the DB');
        } else {
            return back()->with('error', 'Something went wrong in the DB');
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

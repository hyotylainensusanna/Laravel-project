<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Image;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.show')->withUser($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('home', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
        ));

        $user = User::find($id);

        $user->name = $request->input('name');

        //img
        if($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            $image = Image::make($img);

            $watermark = Image::make('279a7cd0-c14c-476c-a19d-c1b264eef942.jpg');
            $image->insert($watermark, 'bottom-right');
            $image->save($location);
            $image->resize(600,400);

            $user->image = $filename;
        }

        $user->save();

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}

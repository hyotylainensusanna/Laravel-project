<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use PDF;
use Excel;

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

            $img2 = $request->file('image');
            $filename2 = time() . '.' . $img2->getClientOriginalExtension();
            $location2 = public_path('images/thumbs' . $filename);
            $image2 = Image::make($img2);
            $image2->resize(50, 50);
            $image2->save($location2);

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
    public function toPDF() {
        $users = User::all();
        $pdf = PDF::loadView('users.export',['users' => $users]);
        return $pdf->download('blogusers.pdf');
    }

    public function toExcel()
    {
        Excel::create('Users of the Blog', function ($excel) {
            $excel->sheet('blogusers', function ($sheet) {
                $data = [];
                array_push($data, array('Id', 'Name', 'Email', 'Role'));
                $sheet->fromArray($data, null, "A1", false, false);
                $users = User::all();
                foreach ($users as $user) {
                    $data = [];
                    array_push($data, array($user->id, $user->name, $user->email, $user->role));
                    $sheet->fromArray($data, null, "A1", false, false);
                }
            });
        })->download('xlsx');
    }
}

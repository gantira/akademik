<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\User;
Use File;

class GuruController extends Controller
{
   	public function index()
    {
        $data['guru'] = Guru::all();
    	return view('guru.index', $data);
    }

    public function create()
    {   
        $data['guru'] = Guru::all();
    	return view('guru.create', $data);
    }

    public function store(Request $request)
    {   
        if ($request->file('photo')) {
            $destinationPath = 'upload/photo/guru/';
            $fileName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move($destinationPath, $fileName);
            
            $data = $request->all();
            $data['photo'] = $destinationPath . $fileName;
           
            $guru = Guru::create($data);
        }else{
            $guru = Guru::create($request->all());
        }


        $data = [
                    'guru_id'  => $guru->id,
                    'name'     => $request->name,
                    'password' => bcrypt($request->password),
                ];

        User::create($data);

    	return redirect('/guru');
    }

    public function update(Request $request, $id)
    {
        $data = Guru::findOrfail($id);

        if ($request->file('photo')) {
           $destinationPath = 'upload/photo/guru/';
            $fileName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move($destinationPath, $fileName);
            
            File::delete($data->photo);
            $data->fill($request->all());
            $data->photo = $destinationPath . $fileName;
        }else{
            $data->fill($request->all());
        }

        $data->save();

        return back();
    }

    public function show($id)
    {
        $data['guru'] = Guru::findOrfail($id);

        return view('guru.edit', $data);
    }

    public function destroy($id)
    {
        Guru::findOrfail($id)->delete();

        return back();
    }
}

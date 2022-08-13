<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function upload(Request $request)
    {

        if ($request->hasFile('photo')) 
        { 
            $fileExtension = $request->file('photo')->getClientOriginalName(); 
            $file = pathinfo($fileExtension, PATHINFO_FILENAME); 
            $extension = $request->file('photo')->getClientOriginalExtension(); 
            $fileStore = $file . '_' . time() . '.' . $extension; 
            
            // $avatar = Str::random(34);
            $request->file('photo')->move(storage_path('photos'), $fileStore);
            $path = url('/').'/../storage/photos/'.$fileStore;
            // echo $path;
            
            return response()->json(['message' => 'success', 'path'=>$fileStore]);

            // photo upload to : /storage/photos/
            // hot to access :
            // http://localhost:8000/auto_update_api/storage/photos/main-thumb-117268077-200-zxtupznansabzvisbmtxcyoxsnewcguv_1655367911.jpeg
        }else{
            return response()->json(['message' => 'not upload']);
        }

        
    }

}

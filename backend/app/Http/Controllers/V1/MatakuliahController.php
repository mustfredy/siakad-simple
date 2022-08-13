<?php

namespace App\Http\Controllers\V1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Matakuliah;
use DB;

class MatakuliahController extends Controller
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

    public function create(Request $request)
    {
        $data = $request->all();
        $model = Matakuliah::create($data);

        return response()->json($model);
    }

    public function index()
    {
        // $model = Matakuliah::all();
        // return response()->json($model);
        // $model = DB::table('Matakuliah')->simplePaginate(10);
        
        $model = DB::table('mata_kuliah')->paginate(10);
        return response()->json(
            [
                // 'totalItems'=>$model->count(),
                'totalItems'=>$model->total(),
                'tutorials'=>$model->items(),
                'totalPages'=>$model->lastPage(),
                'currentPage'=>$model->currentPage(),
            ]
        );
        
    }

    public function show($id)
    {
        $model = Matakuliah::find($id);
        return response()->json($model);
    }

    public function update(Request $request, $id)
    {
        $model = Matakuliah::find($id);
        
        if (!$model) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, [
            "nama_matakuliah" => "required"
        ]);

        $data = $request->all();
        $model->fill($data);
        $model->save();

        return response()->json($model);
    }

    public function delete($id)
    {
        $model = Matakuliah::find($id);
        
        if (!$model) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $model->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}

<?php

namespace App\Http\Controllers\V1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\DosenMatakuliah;
use DB;

class DosenMatakuliahController extends Controller
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
        $model = DosenMatakuliah::create($data);

        return response()->json($model);
    }

    public function index()
    {
        $model = DB::table('dosen_mata_kuliah')
            ->select(['dosen_mata_kuliah.id',
                    'dosen_mata_kuliah.id_mata_kuliah',
                    'dosen_mata_kuliah.id_dosen',
                    'dosen.nama_dosen', 
                    'mata_kuliah.nama_matakuliah'])
            ->join('dosen', 'dosen_mata_kuliah.id_dosen', '=', 'dosen.id')
            ->join('mata_kuliah', 'dosen_mata_kuliah.id_mata_kuliah', '=', 'mata_kuliah.id')
            ->paginate(10);
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
        $model = DB::table('dosen_mata_kuliah')
            ->select(['dosen_mata_kuliah.id',
                    'dosen_mata_kuliah.id_mata_kuliah',
                    'dosen_mata_kuliah.id_dosen',
                    'dosen.nama_dosen', 
                    'mata_kuliah.nama_matakuliah'])
            ->join('dosen', 'dosen_mata_kuliah.id_dosen', '=', 'dosen.id')
            ->join('mata_kuliah', 'dosen_mata_kuliah.id_mata_kuliah', '=', 'mata_kuliah.id')
            ->where('dosen_mata_kuliah.id', '=', $id)
            ->get();
        return response()->json($model);
    }

    public function update(Request $request, $id)
    {
        $model = DosenMatakuliah::find($id);
        
        if (!$model) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $this->validate($request, [
            "id_dosen" => "required",
            "id_mata_kuliah" => "required",
        ]);

        $data = $request->all();
        $model->fill($data);
        $model->save();

        return response()->json($model);
    }

    public function delete($id)
    {
        $model = DosenMatakuliah::find($id);
        
        if (!$model) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        $model->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}

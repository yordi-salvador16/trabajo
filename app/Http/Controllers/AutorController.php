<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        $params = $request->all();
        $autor = Autor::create([
            'nombre' => $params['nombre'],
              
        ]);

        return $autor;

    }

    public function index(Request $request)
    {
        $params = $request->all();
        $size =isset($params['size']) ? $params['size'] : 5;


        $autor = Autor::where('name','>=', $params['name'])
            ->limit($size)->get();

        return $autor;


    }
    public function show($id)
    {
        $autor = Autor::find($id);

        return $autor;


    }
    public function update($id,Request $request)
    {
        $params = $request->all();
        Autor::find($id)->update([
            'nombre' => $params['nombre'],
            
        ]);

        return 'Registro actuaizado';


    }
    public function destroy($id)
    {
        Autor::find($id)->delete();

        return 'Registro eliminado';


    }

}



    

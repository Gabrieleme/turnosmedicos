<?php

namespace App\Http\Controllers;

use App\Especialidades;
use Doctrine\Inflector\Rules\English\Rules;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
//la ruta especialidades se resolvera a traves del metodo EspecialidadesController que contiene la funcion index que retornara
//la vista de los que este en index.blade.php dentro de especialidades
class EspecialidadesController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $especialidades = Especialidades::all();
        return view('especialidades.index', compact('especialidades'));
    }

    public function create()
    {
        return view('especialidades.create');
    }


    private function ejecutarValidacion(Request $request)
    {
        $rules=[
            'nombre'=>'required|min:3',//establezco una regla de validacion y minimo 3 caracteres desde el lado servidor
        ];
        $messages=[
            'nombre.requiered'=>'Es necesario ingresar un nombre',
            'nombre.min'=>'Es necesario un mínimo de tres caracteres',
        ];
        $this->validate($request,$rules, $messages);
    }


    public function store(Request $request)
    {

        $this-> ejecutarValidacion($request);
        //($request->all());
        $especialidad= new Especialidades();
        $especialidad->nombre = $request->input('nombre');
        $especialidad->descripcion = $request->input('descripcion');
        $especialidad->save();

        $notification='el registro se a guardado correctamente';
        return redirect('/especialidad')->with(compact('notification'));
    }

    public function edit(Especialidades $especialidad)
    {
        return view('especialidades.edit', compact('especialidad'));
    }


    public function update(Request $request, Especialidades $especialidad)
    {
        $this->ejecutarValidacion($request);


        $especialidad->nombre = $request->input('nombre');
        $especialidad->descripcion = $request->input('descripcion');
        $especialidad->save();//actualizacion

        $notification ='el registro se a modificado correctamente';
        return redirect('/especialidad')->with(compact('notification'));
    }

    public function destroy(Especialidades $especialidad)
    {
        $especialidad->delete();

        $notification ='el registro '.$especialidad->nombre. ' se a eliminado';
        return redirect('/especialidad')->with(compact('notification'));;
    }
}

<?php
namespace App\Http\Controllers;

use App\Repositories\PersonasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use App\User;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $personas=DB::select("SELECT * FROM users");
       return view('personas.index')
       
        ->with('personas',$personas)
        ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->all();
        // dd($datos);
        $Usuario=new User();
         
         $Usuario->name=$datos['name'];
         $Usuario->email=$datos['email'];
         $Usuario->cli_telefono=$datos['cli_telefono'];
         
         $Usuario->cli_cedula=$datos['cli_cedula'];
         $Usuario->cli_genero=$datos['cli_genero'];
         $Usuario->cli_direccion=$datos['cli_direccion'];
         $Usuario->cli_tipo=$datos['cli_tipo'];
         $Usuario->cli_estadocivil=$datos['cli_estadocivil'];
         $Usuario->cli_usuario=$datos['cli_usuario'];
         $Usuario->cli_fenac=$datos['cli_fenac'];

         $Usuario->password=bcrypt($datos['password']);
        $Usuario->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $personas = $this->personasRepository->find($id);

       


      return view('personas.store');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $personas = $this->personasRepository->find($id);

        

        $personas = $this->personasRepository->update($request->all(), $id);

        
        return redirect(route('personas.index'));
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

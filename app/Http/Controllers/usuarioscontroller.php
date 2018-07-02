<?php

namespace App\Http\Controllers;
use App\Usuarios;
use Illuminate\Http\Request;
use DB;

class usuarioscontroller extends Controller  
{
    protected $result      = false;
    protected $message     = 'Ocurrió un problema al procesar su solicitud';
    protected $records     = array();
    protected $status_code = 400;

    
    public function index()
    {
        //
         try {
            $records = Usuarios::all();

             

            $this->status_code  = 200;
            $this->result       = true;
            $this->message      = 'Registros de usuarios consultados correctamente.';
            $this->records      = $records;
        } catch (\Exception $e) {
            $this->status_code  = 400;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
        } finally {
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];

            return response()->json($response, $this->status_code);
         
         
        }
              
    }
     
     public function mostrar()
     {
        $users = Usuarios::all();
        return view ('usuarios', ['users' => $users]);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         try {
           
                    $record = Usuarios::create([
                        'nombre'               => $request->input('nombre'),                           
                        'correo'              => $request->input('correo'),
                        'telefono'             => $request->input('telefono'),                          
                    ]);

                    if ($record) {
                        $this->status_code  = 200;
                        $this->result       = true;
                        $this->message      = 'Registro de usuario creada correctamente.';
                        $this->records      = $record;
                    } else {
                        throw new \Exception('Registro de usuario no pudo ser creado.');
                    }

            }
        catch (\Exception $e) {
            $this->status_code  = 400;
            $this->result       = false;
            $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
        } finally {
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];

            return response()->json($response, $this->status_code);
        }
         return redirect('/usuarios');
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
        // try {
        //     $record = Usuarios::find($id);
             
        //     if ($record) {
        //         $this->status_code  = 200;
        //         $this->result       = true;
        //         $this->message      = 'Registro de usuario consultado correctamente.';
        //         $this->records      = $record;
        //     } else {
        //         throw new \Exception('Registro usuario no encontrado.');
        //     }
        // } 
        // catch (\Exception $e) {
        //     $this->status_code  = 400;
        //     $this->result       = false;
        //     $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
        // } finally {
        //     $response = [
        //         'result'  => $this->result,
        //         'message' => $this->message,
        //         'records' => $this->records,
        //     ];

        //     return response()->json($response, $this->status_code);
        // }
         return view('perfil', ['users' => Usuarios::findOrFail($id)]);
        
    }


        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        return view('edit', ['users' => Usuarios::findOrFail($id)]);

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
        //
            try {
                
                  $record= Usuarios::find($id);
               
                    $record->nombre         = $request->input('nombre', $record->nombre);
                    $record->correo        = $request->input('correo', $record->correo);
                    $record->telefono       = $request->input('telefono', $record->telefono);
                 
                    $record->save();
                    if ($record->save()) {
                        $this->status_code = 200;
                        $this->result      = true;
                        $this->message     = 'Usuario actualizado correctamente';
                        $this->records     = $record;
                    }
                    else {
                        throw new \Exception('El usuario no pudo ser actualizado');
                    }
           
        } catch (\Exception $e) {
            $this->status_code = 400;
            $this->result      = false;
            $this->message     = env('APP_DEBUG')?$e->getMessage():$this->message;
        }finally{
            $response = [
                'result'  => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
                 return redirect('usuarios');

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
         try {
                $record = Usuarios::find($id);
                if ($record) {
                    $record->delete();
                    $this->status_code  = 200;
                    $this->result       = true;
                    $this->message      = 'Usuario eliminada correctamente';

                } else {
                    throw new \Exception('El usuario no pudo ser encontrado');
                }
            } 
            catch (\Exception $e) {
                $this->status_code  = 400;
                $this->result       = false;
                $this->message      = env('APP_DEBUG') ? $e->getMessage() : $this->message;
            } finally {
                $response = [
                    'result'  => $this->result,
                    'message' => $this->message,
                    'records' => $this->records,
                ];

                return response()->json($response, $this->status_code);
               
                }

                
        }


            

}
    
   
    
 



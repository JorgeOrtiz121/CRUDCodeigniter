<?php

namespace App\Controllers;

use App\Models\PersonasModel;

class Home extends BaseController
{
    public function index()
    {
       $datos=new PersonasModel();
       $data=$datos->listaPersonas();
       
      return view('personal', compact ('data'));
    }

    public function create(){
     $datos=[
     'personasNombre'=>$_POST['nombre'],
     'personasApellido'=>$_POST['apellido'],
     'personasTitulo'=>$_POST['titulo'],
     'personasUsername'=>$_POST['username']];

     $crear=new PersonasModel();
      $insertar=$crear->crearpersonas($datos);
      if($insertar>0){
       return redirect()->to(base_url());
      }else{
        return redirect()->to(base_url());

      }
    }

    public function edit($id){
      $respuesta=new PersonasModel();
      $data=$respuesta->obtenerNombre($id);
        return view('actualizar', compact('data'));
    
    }
    public function update(){
      $datos=[
        'personasNombre'=>$_POST['nombre'],
        'personasApellido'=>$_POST['apellido'],
        'personasTitulo'=>$_POST['titulo'],
        'personasUsername'=>$_POST['username']
      ];
   
  $Crud = new PersonasModel();
  $idNombre = $_POST['idUsuario'];
  $respuesta = $Crud->actualizar($datos, $idNombre);

  if ($respuesta) {
    return redirect()->to(base_url());
  } else {
    return redirect()->to(base_url());
  }
    }

    public function show($id){
      $respuesta=new PersonasModel();
      $data=$respuesta->obtenerNombre($id);
        return view('visualizar', compact('data'));
    }

    public function destroy($id){
      $elimi=new PersonasModel();
      $data=$elimi->eliminar($id);
      if ($data) {
        return redirect()->to(base_url());
      } else {
        return redirect()->to(base_url());
      }

    }
}

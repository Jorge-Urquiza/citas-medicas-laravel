@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Editar Paciente</h3>
        </div>
        <div class="col text-right">
        <a href="{{ route('patients.index') }}" class="btn btn-sm btn-default">
              Cancelar y volver
          </a>
        </div>
      </div>
    </div>
      <div class="card-body">
         @if($errors->any())
          <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
          </div>
         @endif  
          <form action="{{ route('patients.update' , $patient->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="form-group">
                  <label for="">Nombre del Paciente</label>
                  <input type="text" name="name" class="form-control" placeholder="Ingresa el Nombre" value="{{old('name',$patient->name)}}" required >
            </div>
            <div class="form-group">
               <label for="">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Ingresa tu Email" value="{{old('email',$patient->email)}}" required >
           </div>
            <div class="form-group">
               <label for="">Documento de Identidad</label>
                <input type="text" name="dni" class="form-control" placeholder="Ingresa tu DNI"  value="{{old('dni',$patient->dni)}}" >
             </div>
             <div class="form-group">
              <label for="">Direccion</label>
                <input type="text" name="address" class="form-control" placeholder="Ingresa tu Dirección" value="{{old('address', $patient->address)}}" required >
             </div>
             <div class="form-group">
              <label for="">Teléfono</label>
                <input type="number" name="phone" class="form-control" placeholder="Ingresa tu Telefono" value="{{old('phone',$patient->phone)}}"  >
             </div>
             <div class="form-group">
              <label for="password">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingresa tu Telefono"  >
             </div>
             <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
</div>
@endsection

@extends('layout.index')

@section('title','Employee')

@section('panelname','insertar vendedores')

@section('panelconten')
  @include('msn.msn')
  <div >
                    {!! Form::open(['method' => 'POST','route'=>'empleados.store', 'class' => 'form-horizontal']) !!}

                    <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
                        {!! Form::label('name_employee', 'Nombre Vendedor') !!}
                        {!! Form::text('name_employee', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('inputname') }}</small>
                    </div>

                    <div >
                        {!! Form::button ('<span class="glyphicon glyphicon-floppy-disk "> Registrar</span>', array('class' => 'btn btn-primary ','type'=>'submit')) !!}
                    </div>
                {!! Form::close() !!}
              </br>
</div>
<div class="table-responsive">

  <table class="table table-bordered">
    <tr>
      <td>Vendedor</td>
      <td>Accion </td>
    </tr>
 @foreach ($empleados as $employ)
     <tr>

         <td>{!!$employ->name_employee!!}</td>
         <td> <a href="{{route('empleados.destroy',$employ->id)}}"class="btn btn-danger btn-sm col-md-offset-5" ><span class="glyphicon glyphicon-trash "> Eliminar</span></a></td>


     </tr>
      @endforeach
  </table>
    <div class="col-md-offset-5">
       {{$empleados->links()}}
    </div>
</div>
@endsection

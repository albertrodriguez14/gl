@extends('layout.index')



@section('title','Asignar')

@section('panelname','Ticket')

@section('panelconten')
  @include('msn.msn')

<div class="">
{!! Form::open(['method' => 'POST', 'class' => 'form-inline']) !!}

    <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
        {!! Form::label('employee_id', 'Vendedor',['class'=>'control-label']) !!}
        {!! Form::select('employee_id',$empleados,null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('inputname') }}</small>
    </div>
      <div class="col-md-offset-2 form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
          {!! Form::label('ticket_id', 'Numero Ticket',['class'=>'control-label']) !!}
          {!! Form::select('ticket_id',$ticket,null, ['class' => 'form-control']) !!}
          <small class="text-danger">{{ $errors->first('inputname') }}</small>
      </div>

    <div class="btn-group pull-right">

        {!! Form::submit("Asignar", ['class' => 'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}

<br>
</div>
<div class="table-responsive">

  <table class="table table-bordered">

   <tr>
    <td>Vendedor</td>
    <td>numero Asignado</td>

   </tr>
   @foreach ($asigandos as $asig)
     <tr>
       <td>{{$asig->name_employee}}</td>
     <td>{{$asig->ticket_number}}</td>
    </tr>
   @endforeach



  </table>

</div>

@endsection

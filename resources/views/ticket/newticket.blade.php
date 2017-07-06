@extends('layout.index')

@section('title','Ticket')

@section('panelname','Ticket')

@section('panelconten')
  @include('msn.msn')
 {!! Form::open(['method' => 'POST','route' => 'boletas.store'  ,  'class' => 'form-horizontal']) !!}
<div>
     <div class="form-group{{ $errors->has('inputname') ? ' has-error' : '' }}">
         {!! Form::label('ticket_number', 'numero de ticket',['class'=>'control-label']) !!}
         {!! Form::text('ticket_number', null, ['class' => 'form-control', 'required' => 'required']) !!}
         <small class="text-danger">{{ $errors->first('inputname') }}</small>
     </div>

     <div class="btn-group col-md-offset-5 ">

         {!! Form::submit("Agregar", ['class' => 'btn btn-primary']) !!}
     </div>
 {!! Form::close() !!}

</div></br>
<div class="table-responsive">

  <table class="table table-bordered">
    <tr>
      <td class="text-center">tickets #</td>
      <td class="text-center" >Accion </td>
    </tr>
        @foreach ($ticks as $tick)
         <tr>
           <td>{!! $tick->ticket_number!!}</td>
           <td><a href="{{route('boletas.destroy',$tick->id)}}" class="btn btn-danger col-md-offset-5 "><span class="glyphicon glyphicon-trash text-center"> Eliminar </span></a> </td>
         </tr>

        @endforeach

  </table>
  <div class="col-md-offset-4" >
          {{$ticks->links()}}
  </div>
</div>




@endsection

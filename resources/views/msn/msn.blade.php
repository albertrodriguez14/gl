{{-- mensaje de exito para guardado --}}
  @if (Session::has('save'))
    <div class="alert-success alert  "role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>{{Session::get('save')}}</strong>
    </div>
  @endif
{{-- mensaje session  eliminado --}}
  @if (Session::has('delete'))
    <div class="alert-success alert  "role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>{{Session::get('delete')}}</strong>
    </div>
  @endif

{{-- mesje para validar las reglas --}}
 @if($errors->any())
    <div class="alert-danger alert  "role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
         @foreach ($errors->all() as $element)
           <strong>{{$element}}</strong>
         @endforeach

    </div>
@endif

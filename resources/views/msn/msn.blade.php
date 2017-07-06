
  @if (Session::has('save'))
    <div class="alert-success alert  "role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>{{Session::get('save')}}</strong>
    </div>
  @endif

  @if (Session::has('delete'))
    <div class="alert-success alert  "role="alert">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
         <strong>{{Session::get('delete')}}</strong>
    </div>
  @endif

@if(session()->has('status'))

    <div class="alert alert-info my-3" role="alert">
      <strong>Info: </strong> {{ session()->get('status')}}
    </div>

@endif
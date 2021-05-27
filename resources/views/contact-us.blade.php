@extends('layout')
@section('content')


<div class="row">
  <div class="col-sm-8">
    <br>
    <h3>Contact Us</h3>

<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" class="cadreContact">
    @csrf
     <div class="mb-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control sm" id="email" placeholder="Name" >
        @if($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif 
      </div>

      <div class="mb-2">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control" id="email" placeholder="06 01 02 03 03 " >   
        @if($errors->has('phone_number'))
              <span class="text-danger">{{ $errors->first('phone_number') }}</span>
        @endif 
      </div>

     <div class="mb-2">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" id="email" placeholder="name@example.com" >
        @if($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif      
      </div>

      <div class="mb-2">
        <div class="form-group">
            <label  for="choice" for="choice">Subject</label>
            <select class="custom-select" name="choice" id="choice">
                <option selected>What's this about?</option>
                <option value="Security 1">Security 1</option>
                <option value="Security 2">Security 2</option>
                <option value="Security 3">Security 3</option>
            </select>
        @if($errors->has('choice'))
             <span class="text-danger">{{ $errors->first('choice') }}</span>
        @endif 
        </div>
      </div>

      <div class="mb-2">
        <label for="content" class="form-label">Message</label>
        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Go ahead, we're listening..." ></textarea>
        @if($errors->has('content'))
              <span class="text-danger">{{ $errors->first('content') }}</span>
        @endif 
      </div>

      <div class="form-group mt-2 mb-2">
        {!! htmlFormSnippet() !!}
        @if($errors->has('g-recaptcha-response'))
              <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
        @endif 
      </div>

      <button class="btn btn-block btn-info" type="submit"> Send email</button>

</form>
    <br>
    

  </div>
  <div class="col-sm-4 ">
    <br><br><br><br>
    <div class="card border-0 cadreContact ">
      <div class="card-body text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-geo-alt-fill mb-1" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </svg>
        <h4 class="text-uppercase mb-5">call us</h4>
        <p>+880 16 83 61 55 82</p>
      </div>
    </div>
 
    <div class="card border-0 cadreContact">
      <div class="card-body text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-telephone-fill mb-1" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>
        <h4 class="text-uppercase mb-5">office loaction</h4>
       <address>Suite 02, Level 12, Sahera Tropical Center </address>
      </div>
    </div>

  </div>
</div>




@endsection



       
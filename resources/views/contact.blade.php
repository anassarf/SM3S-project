@extends('layout')
@section('content')

<div class="current-link">
    <a href="home.html" class="home-link">
        <span>Home</span>
    </a>
    <span>>></span>
    <span class="current-page">Contact page </span>
</div>
<div class="container">
    <div class="left-container">
        <div class="info-form">
            <i class="fa fa-location-arrow" aria-hidden="true"></i>
            <div class="info">
                <h3 class="title-info"> Address</h3>
                <span class="paragraph">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, fugit!
                </span>
            </div>
        </div>
        <!--  -->
        <div class="info-form">
            <i class="fa fa-envelope-square" aria-hidden="true"></i>
            <div class="info">
                <h3 class="title-info"> Have any Questions ? </h3>
                <span class="paragraph">
                    exemple@gmail.com
                </span>
            </div>
        </div>
        <!--  -->
        <div class="info-form">
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <div class="info">  
                <h3 class="title-info"> Phone Number </h3>
                <span class="paragraph">
                    +(212) 6 23 06 12 48
                </span>
            </div>
        </div>
    </div>
    <div class="right-container">
        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
                <input type="text" name="name" id="name" placeholder="Full name">
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif 
            
            
                <input type="text" name="phone_number" id="phone_number" placeholder=" 06 01 02 03 03">
                @if($errors->has('phone_number'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif 
           
                
                <select name="choice" id="choice">
                    <option selected>What's this about?</option>
                    <option value="Securite">Security</option>
                    <option value="Office Cleaning">Office Cleaning</option>
                    <option value="Spring Cleaning">Spring Cleaning</option>
                    <option value="Surveillance">Surveillance</option>
                </select>
                
                @if($errors->has('choice'))
                    <span class="text-danger">{{ $errors->first('choice') }}</span>
                @endif 
            
                <input type="email" name="email" id="email" placeholder=" Your Email">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif          
                
                <textarea name="content" id="content" cols="30" placeholder="Your message ..." rows="10"></textarea>
                @if($errors->has('content'))
                    <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif 

                <div class="form-group my-3 mt-2 mb-2">
                    {!! htmlFormSnippet() !!}
                    @if($errors->has('g-recaptcha-response'))
                          <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    @endif 
                </div>
            
            <div class="button-form">
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>
</div>


@endsection
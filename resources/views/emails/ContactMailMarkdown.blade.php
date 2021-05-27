@component('mail::message')
# Introduction
### Nom:   {{ $name }}   
### Telephone:  {{ $phone }}
  
@component('mail::panel')
    {{ $content }}
@endcomponent


Merci, {{ config('app.name') }}

@endcomponent

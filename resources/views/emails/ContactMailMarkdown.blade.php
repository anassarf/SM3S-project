@component('mail::message')
### Nom:   {{ $name }}   
### Telephone:  {{ $phone }}
### Sujet : {{ $subject }}
  
@component('mail::panel')
    {{ $content }}
@endcomponent


Merci, {{ config('app.name') }}

@endcomponent

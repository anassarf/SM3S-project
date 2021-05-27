@component('mail::message')

@component('mail::panel')
# ***Votre Mail a été envoyé avec succès***
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent

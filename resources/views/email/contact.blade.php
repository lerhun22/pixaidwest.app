@component('mail::message')

Nouveau message : {{ $subject }} 

de : {{ $name }}   


@component('mail::panel')
{{ $message }}
@endcomponent

@component('mail::button', ['url' => route ('contact') ])
Répondre à cet email
@endcomponent

Cordialement,<br>
Didier - {{ config('app.name') }}
@endcomponent

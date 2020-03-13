@component('mail::message')

It Sounds you to hear more about {{$topic}}

@component('mail::button', ['url' => 'localhost:8000/cars', 'color' => 'success'])
Thank You For Contacting Us!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')

Olá, você recebeu um novo contato a partir do seu site!

Nome: <b>{{$reply_name}}</b>

Email: {{$reply_email}}

Mensagem:

@component('mail::panel')
    {{$message}}
@endcomponent

@endcomponent

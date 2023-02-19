<x-mail::message>
    Sayın #  {{$data["user"]}}

    Sistemimize; {{$data["date"]}} tarihinde giriş yaptınız.

    Giriş Yapılan Tarayıcı : {{$data["http_user_agent"]}}

    Kolaylıklar dileriz,
    {{ config('app.name') }}
</x-mail::message>

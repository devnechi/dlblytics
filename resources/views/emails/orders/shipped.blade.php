@component('mail::message')
# Introduction

New project  created .
{{$url=route('ce-pillar-projects-management')}}
Go to the project management
@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

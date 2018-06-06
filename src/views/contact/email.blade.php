@component('mail::message')
# Introduction

This email from {{$sender}}. <br/>

Message :: {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

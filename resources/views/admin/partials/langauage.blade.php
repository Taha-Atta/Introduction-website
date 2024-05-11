@php
$local =  LaravelLocalization::getCurrentLocale() == 'ar' ?'en':'ar';
@endphp
    <a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($local) }}" id="local" >
        {{strtoupper($local)}}
    </a>


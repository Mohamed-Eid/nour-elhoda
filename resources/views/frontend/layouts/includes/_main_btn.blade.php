@php
if(!isset($title)){
    $title='View More';
}
if(!isset($link)){
    $link='#';
} 
@endphp

<a href="{{ $link }}" class="hover-effect"> {{ $title }}</a>
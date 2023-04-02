@props(["active","link","title"])
@php
$active = $active??false;
$link = $link??"#";
@endphp
<li @class(["breadcrumb-item","active"=>$active])><a href="{{$link}}">{{$title}}</a></li>

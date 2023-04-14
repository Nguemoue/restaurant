@props(['image'])

@php
    $image = $image ?? false;
@endphp
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">

				<div @class(["text-center text-lg-start","col-lg-6"=>$image,"col-lg-12"=>!$image])>
                {{ $header }}

                {{ $body }}
            </div>

            @if ($image)
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{$image}}" alt="{{$image}}">
                </div>
            @endif

        </div>
    </div>
</div>

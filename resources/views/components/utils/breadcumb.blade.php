@props(["items"])

<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        @foreach($items as $item)
            <li class="breadcrumb-item"><a href="#">{{$item}}</a></li>
        @endforeach
    </ol>
</nav>
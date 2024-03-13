@extends('templates.default')

@section('hero')
    <x-app.hero>
        <x-slot name="header">
            <h1 class="display-3 text-white text-center mb-3 animated slideInDown">Food Menu</h1>
        </x-slot>
        <x-slot name="body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </x-slot>
    </x-app.hero>
@endsection

@section('content')
    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
					<ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5" >
						@foreach($categoriePlats as $key => $categoriePlat)
						<li class="nav-item border text-center m-2">
								 <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 {{ $loop->index == 0?'active':''}}" data-bs-toggle="pill"
									 href="#tab-{{$categoriePlat->id}}">
									 <i class="fa fa-coffee fa-2x text-primary"></i>
									 <div class="ps-3">
										 <small class="text-body">{{$categoriePlat->nom}}</small>
										 <h6 class="mt-n1 mb-0">{{$categoriePlat->nom}}</h6>
									 </div>
								 </a>
							 </li>
						@endforeach
					</ul>
					<div class="tab-content">
						 @forelse($categoriePlats as $categoriePlat)
							 <div id="tab-{{$categoriePlat->id}}" @class(["tab-pane fade  p-0","show active"=>$loop->index == 0])>
								 <div class="row align-items-end g-4">
									 @foreach($categoriePlat->plats as $plat)
										<x-core.plat :plat="$plat"/>
									 @endforeach
								 </div>
							 </div>
						 @empty
							 <div class="alert alert-warning">
								 Aucun éléments n'est disponible dans la base de données !
							 </div>
							 <div class="mx-auto">
								 <a href="{{route('home')}}" data-toggle="tooltip" title="retour a l'acceuil" class="btn btn-success btn-sm rounded">
									 <i class="fa fa-home fa-2x"></i>
								 </a>
							 </div>
						 @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
@endsection

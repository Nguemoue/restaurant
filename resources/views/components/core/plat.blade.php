@props(["plat"])
@php
    $plat=$plat??null;
@endphp
@if($plat)
	<div class="col-lg-6 ">
		<div class="card">
			<div class="card-header d-flex justify-content-between">
				<h5 class="text-break">
					{{$plat->created_at->diffForHumans()}}
				</h5>
				<a href="#!" data-toggle="tooltip" class="btn btn-warning btn-sm" title="voir les photos"><i class="fa fa-eye"></i></a>
			</div>
			<div class="card-body">
				<div class="d-flex align-items-center">
					{{-- j'affiche le premier media concerné --}}
					<img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="{{$plat->nom}}"
						  style="width: 80px;">
					<div class="w-100 d-flex flex-column text-start ps-4">
						<h5 class="d-flex justify-content-between border-bottom pb-2">
							<span>{{$plat->nom}}</span>
							<span class="text-primary">{{$plat->prix}} {{$devise}}</span>
						</h5>
						<small class="fst-italic">{{$plat->description}}</small>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-success" data-toggle="tooltip" title="ajouter au panier"><i class="fa fa-cart-plus"></i></button>
			</div>
		</div>
	</div>
@endif

@extends('layouts.app')

@section('content')

	<div class="products">
		@foreach($products as $product)
			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>
						<div class="product-title">
							<h5><span>{{ $product->title }}</span></h5>
							<h5><em>&euro;{{ $product->price }}</em></h5>
						</div>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
						<?php if($product->discount >0) {?>
                            <p class="discount-text"><?php echo "Nu <strong> $product->discount&percnt;</strong> korting!"; ?></p>
						<?php } ?>
					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>
		@endforeach
	</div>

@endsection
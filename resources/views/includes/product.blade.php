
<div class="col-sm-12 col-md-12">
	@foreach($articles as $article)
		<div class="col-md-3 col-sm-6">
			<!-- Product -->
			<div class="shop-item" style="height:357px">
				<!-- Product Image -->
				<div class="image" style="height:150px;">
					<a href="{{ $article->path() }}">
						<img style="height:150px;" class="img-responsive center-block" src="{{ $article->imagePath() }}" alt="{{ $article->title }}">
					</a>
				</div>
				<!-- Product Title -->
				<div class="title">
					<h3><a href="{{ $article->path() }}">{{ substr($article->title,0,30) }}</a></h3>
					<div class="text-center">Code: {{ $article->code }}</div>
				</div>
				<!-- Product Price-->
				<div class="price">
					<span class="price-was">$959.99</span> {{ formatedPrice($article->price) }}
				</div>

				<!-- Product Description-->
{{-- 				<div class="description">
					<p></p>
				</div> --}}
				<!-- Add to Cart Button -->
				<div class="actions">
					<a href="page-product-details.html" class="btn"><i class="icon-shopping-cart icon-white"></i> Dodaj u korpu</a>
				</div>
			</div>
			<!-- End Product -->
		</div>
	@endforeach
</div>
<div class="pagination-wrapper ">
	{{ $articles->links() }}
</div>
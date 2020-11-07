<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="products-slider">
					@foreach($articles as $article)
					<!-- Products Slider Item -->
					<div class="shop-item">
		                <div class="ribbon-wrapper">
		                    <div class="price-ribbon ribbon-green"> NOVO </div>
		                </div>
						<!-- Product Image -->
						<div class="image" style="height:150px;">
							@if (empty($article->image))
								<a href="{{ $article->path() }}">
									<img class="img-responsive center-block" 
										style="height:150px;"
										src="{{ noImage() }}" alt="{{ $article->title }}">
								</a>
							@else
								<a href="{{ $article->path() }}">
									<img class="img-responsive center-block" 
										style="height:150px;"
										src="{{ $article->imagePath() }}" alt="{{ $article->title }}">
								</a>
							@endif
						</div>
						<!-- Product Title -->
						<div class="title">
							<h3><a href="{{  $article->path() }}">{{ substr($article->title,0,30) }}</a></h3>
						</div>
						<!-- Product Price -->
						<div class="price">
							{{ formatedPrice($article->price) }}
						</div>
						<!-- Buy Button -->
						<div class="actions">
							<form class="clear-form" action="/tp-admin/cart/{{ $article->id }}" method="GET">
								@csrf
								{{-- <input id="amount" name="amount" type="text" class="form-control input-sm input-micro" value="1" hidden> --}}
								<button type="submit" class="btn"><i class="icon-shopping-cart icon-white"></i> Dodaj u korpu</button>
							</form>
						</div>
					</div>
					<!-- End Products Slider Item -->
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
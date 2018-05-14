@extends('user.layouts.app')
@section('title', 'Omelas Products Page')

@section('main-content')
<div class="shop">
					<div class="container">
						<div class="row">
							<div class="offset-8"></div>
							<div class="col-lg-4 left-sort">
								<!-- page-bar-start -->
								<div class="page-bar">
									<div class="shop-tab">
										<!-- toolbar-sorter-start -->
										<div class="toolbar-sorter">
											<select  class="sorter-options" data-role="sorter">
												<option selected="selected" value="Lowest">Sort By: Recomended</option>
												<option value="Highest">Sort By: Name (A - Z)</option>
												<option value="Product">Sort By: Name (Z - A)</option>
												<option value="Product">Sort By: Price ($ - $$)</option>
												<option value="Product">Sort By: Price ($$ - $)</option>
											</select>
										</div>
										<!-- toolbar-sorter-end -->
									</div>
								</div>
								<!-- page-bar-end -->
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Women</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">Dress (230)</a></li>
											<li><a href="#">Maxi (14)</a></li>
											<li><a href="#">Accessories (54)</a></li>
											<li><a href="#">Womenen (67)</a></li>
											<li><a href="#">Lorem ipsum  (14)</a></li>
											<li><a href="#">Piere (12)</a></li>
										</ul>
									</div>
								</div>
								<div class="single-shop mb-40">
									<div class="Categories-title">
										<h3>Size</h3>
									</div>
									<div class="Categories-list">
										<ul>
											<li><a href="#">L (14)</a></li>
											<li><a href="#">M (11)</a></li>
											<li><a href="#">S (12)</a></li>
											<li><a href="#">XL (14)</a></li>
											<li><a href="#">XS (12)</a></li>
											<li><a href="#">XXL (13)</a></li>
										</ul>
									</div>
								</div>
							</div>

						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="products-section">

									<div class="row products" id="box2">
										@forelse($products as $product)
											<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
											<figure><img src="{{url('images',$product->image)}}" class="img-responsive" ></figure>
												<div class="star">
													<p><i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											</p>
												</div>
												<h3 class="title-of-item">{{ $product->name}}</h3>
												<p class="price">${{ $product->price  }}</p>
												<p class="old-price">${{(  $product->price+40000)}}</p>
												<a  href="{{route('cart.addItem', $product->id)}}" class="button expanded add-to-cart">
									        Add to Cart
									      </a>

										</div>
										@empty
										<h3>Empty</h3>



								</div>
									@endforelse
							</div>
						</div>


		</div>
	</div>
	</div>
	 <!---Row end-->
<!-- <div class="pager">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
  </div> -->


@endsection

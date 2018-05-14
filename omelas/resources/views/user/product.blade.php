@extends('user.layouts.app')
@section('title', 'Omelas Product Page')

@section('main-content')

<div class="container">
	<div class="row product-imgs">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="product-img img-responsive">
				<img src="{{url('images',$product->image)}}" alt="product image"
				width="400" height="500">
					<div class="row product-img-next">

		</div>
			</div>
		</div>


		<div class="col-lg-6 product-desc">
			<h3> {{$product->name}}</h3>
				<div class="col-md-6">
					<p class="price">${{$product->price}}</p>
				</div>




		<div class="row">
			<a  href="{{route('cart.addItem', $product->id)}}" class="button black-btn">
				Add to Cart
			</a>
				<div class="product-details">
					<h4>Product Details</h4>
					<hr>
					<p>
Pellentesque non ultrices nisi. Ut auctor, massa vel
hendrerit consectetur, augue mi vestibulum nibh, vitae ull elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni varius at arcu. Proin convallis varius sollicitudin.
Sed accumsan posuere eros quis placerat. Vestibulum sit amet malesuada elit. Quisque</p>
				</div>
				<div class="product-details">
					<h4>Delivery Information</h4>
					<hr>
					<p>
Pellentesque non ultrices nisi. Ut auctor, massa vel
hendrerit consectetur, augue mi vestibulum nibh, vitae ull elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eni varius at arcu. Proin convallis varius sollicitudin.
Sed accumsan posuere eros quis placerat. Vestibulum sit amet malesuada elit. Quisque</p>
				</div>
				<div class="product-details social-icons">
					<h4>Share the product <div class="hider"><a href="">+</a></div></h4>

					<hr>
					<div class="hide-show">
					<p >
						<a href="facebook.com/"><i class="fa fa-facebook"></i></a>
						<a href="instagram.com/"><i class="fa fa-instagram"></i></a>
						<a href="twitter.com/"><i class="fa fa-twitter"></i></a>
						<a href="vk.com/"><i class="fa fa-vk"></i></a>
					</div>
				</div>
		</div>
	</div>
	<div class="products-section">
		<div class="header-h2">
			<h2>You MAY ALSO LIKE</h2>
							</div>
							<div class="row products" id="box2">
								<div class="product first-product col-lg-2 col-md-2 col-sm-6 col-xs-12">
								<figure><img src="{{ asset('omelas/img/new-arrival1.jpg') }}" class="img-responsive" width="200"></figure>
								<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</p>
							</div>
							<h3 class="title-of-item">Zara Collection Outwear
							</h3>
							<p class="price">$210</p>
							<p class="old-price">$328</p>
						</div>
						<!-- begin of for loop -->

				<div class="product col-lg-2 col-md-2 col-sm-6 col-xs-12">
				<figure><img src="{{ asset('omelas/img/new-arrival3.jpg') }}" class="img-responsive" width="200"></figure>
				<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</p>

				<h3 class="title-of-item">
				Brand Clothing Collection</h3>
				<p class="price">$210</p>
				<p class="old-price">$328</p>
			</div>
		</div>
<!-- end for loop -->
</div>

</div>
</div>
<!---Size Chart-->
<div class="size">
		<div class="header-h3"><h2>Size Chart</h2></div>
		<p>These sizes based on European size system, if you want use Asian size system order larger product </p>
		<table class="table table-striped">
		<thead>
		<tr>
			<th scope="col">Size</th>
			<th scope="col">Boost </th>
			<th scope="col">Waist</th>
			<th scope="col">Hip</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<th scope="row">SL</th>
			<td>96 sm</td>
			<td>57 sm</td>
			<td>65 sm</td>
		</tr>
		<tr>
			<th scope="row">XL</th>
			<td>87 sm</td>
			<td>96 sm</td>
			<td>75 sm</td>
		</tr>
		<tr>
			<th scope="row">SXL</th>
			<td>56 sm</td>
			<td>107 sm</td>
			<td>75 sm</td>
		</tr>
		<tr>
			<th scope="row">XXL</th>
			<td>87 sm</td>
			<td>66 sm</td>
			<td>65 sm</td>
		</tr>
		<tr>
			<th scope="row">XXXL</th>
			<td>96 sm</td>
			<td>57 sm</td>
			<td>65 sm</td>
		</tr>
		<tr>
			<th scope="row">VL</th>
			<td>57 sm</td>
			<td>96 sm</td>
			<td>65 sm</td>
		</tr>
	</tbody>
</table>
<hr>
</div>

</div>
</div>
</div>
</div>
</div>

@endsection

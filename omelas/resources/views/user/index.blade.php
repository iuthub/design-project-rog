@extends('user.layouts.app')
@section('title', 'Omelas Home Page')

@section('main-content')
<section class="slider" id="box1" >
  <div class="container">
    <div class="homePage row">
      <p class="offset-1" ></p>
      <div class="text-homepage col-md-5 col-sm-7" >
        <h5>
        NEW COLLECTION
        </h5>
        <h1>
        Today's
        <br>
        Collection
        </h1>
        <p>Sed accumsan posuere eros quis placerat elit..</p>
        <button class="btn-effect">
        SHOP NOW
        </button>
      </div>

      <div class="homepage-img col-md-5 col-sm-5 ">
        <img src="{{ asset('omelas/img/zara1.png')}}">
      </div>
    </div>
  </div>
</section>
<div class="products-section">
		<div class="header-h2">
				<h2>New Arrivials</h2>
			</div>
		<div class="row products" id="box2">
      @forelse($products->chunk(4) as $chunk)
      @foreach($chunk as $product)
			<div class="product first-product col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<a href="{{route('product',$product->id)}}"><figure><img src="{{url('images',$product->image)}}" class="img-responsive" ></figure>
				<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</p>
			</div>
      <a  href="{{route('cart.addItem', $product->id)}}" class="button expanded add-to-cart">
        Add to Cart
      </a>

			<h3 class="title-of-item">{{$product->name}}
			</h3>
			<p class="price">${{$product->price}}</p>
			<p class="old-price">${{ ($product->price+40000)}}</p>
    </a>
@endforeach
      @empty
      <h4>Empty</h4>
    @endforelse
    </div>


</div>
<button class="btn-effect load-more ">
						LOAD MORE
</button>
</div>

<section class="img-responsive" id="box3">
</section>

	<div class="header-h2">
				<h2>New Arrivials</h2>
			</div>
<div class="row products">
<div class="product first-product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new1.png') }}" class="img-responsive" ></figure>
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
<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new2.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Womens Collection Outwear
</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new3.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Brand Clothing Collection</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
<div class=" product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new4.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Outwear With Jacket
</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
</div>

</div>
<button class="btn-effect load-more ">
						LOAD MORE
</button>
</div>

<section class="img-responsive" id="box3">
</section>

	<div class="header-h2">
				<h2>New Arrivials</h2>
			</div>
<div class="row products">
<div class="product first-product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new1.png') }}" class="img-responsive" ></figure>
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
<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new2.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Womens Collection Outwear
</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
<div class="product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new3.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Brand Clothing Collection</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
<div class=" product col-lg-3 col-md-4 col-sm-6 col-xs-12">
<figure><img src="{{ asset('omelas/img/new4.png') }}" class="img-responsive" ></figure>
<div class="star"><p><i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
<i class="fa fa-star" aria-hidden="true"></i>
</p>
</div>
<h3 class="title-of-item">
Outwear With Jacket
</h3>
<p class="price">$210</p>
<p class="old-price">$328</p>
</div>
</div>

<div class="header-h2">
	<h2>New Arrivials</h2>
</div>



  @endsection

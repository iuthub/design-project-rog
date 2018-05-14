<div class="container-fluid">
    <div class="row above-header">
      <div class=" col-lg-4 col-sm-6">
        <div class="logo " id="logo">
          <a href="{{route('omelas')}}">
            <img src='{{ asset('omelas/img/logo.png') }}' height="70"/>
          </a>
        </div>
      </div>
      <div class="offset-4"></div>

      <ul class="header-right  col-lg-4 col-sm-6 col-xs-12">
        <a href="{{route('products')}}"><i class="fa fa-product" ></i> Products</a></li>
        <li>
        <li><a href="#"><i class="fa fa-user" ></i> Account</a></li>
        <li>
          <a href="{{route('cart.index')}}">
            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
            </i>
            Cart
<span class="alert badge">
          {{Cart::count()}}
</span>
          </a>
        </li>
      </div>
    </div>
    <nav>
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
      <nav class="navbar-effect">
        <ul>
          <li><a href="#">What's New </a></li>
          <li><a href="#">Bestsellers</a></li>
          <li><a href="#">Men's</a></li>
          <li><a href="#">Women's</a></li>
          <li><a href="#">Children</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Sale</a></li>
        </ul>
      </nav>
    </header>
  </div>

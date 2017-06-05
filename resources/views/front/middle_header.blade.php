<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<?php if(Auth::check()) {?>
								<li><a href="{{('admin')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
							<?php  }?>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="{{url('checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{('cart')}}"><i class="fa fa-shopping-cart"></i> Cart({{(Cart::count())}})</a></li>
							@if(Auth::check()) 
									<li><a href="{{ ('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ ('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
							@else 								
									<li><a href="{{('login')}}"><i class="fa fa-lock"></i> Login</a></li>
							@endif	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
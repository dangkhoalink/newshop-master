	<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="{{url('/shop')}}">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('/shop')}}">Products</a></li>
										<li><a href="{{url('productdetails')}}">Product Details</a></li> 
										<li><a href="{{url('checkout')}}">Checkout</a></li> 
										<li><a href="{{('cart')}}">Cart</a></li> 
										<li><a href="{{('login')}}">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="{{url('blog')}}">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('blog')}}">Blog List</a></li>
										<li><a href="{{url('blogsingle')}}">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="{{url('error')}}">404</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
							</ul>
						</div>						
					</div>					
						<div class="col-sm-3">
							<div class="search_box pull-righ">
							<form action="{{url('search')}}" method="post"  >
										
								<input type="text" placeholder="Search..." name="search_data" > 
								<input type="hidden" name="_token" value="{{csrf_token()}}">							
					            <button type="submit" class="btn btn-default">
					                <span class="glyphicon glyphicon-search"></span>
					            </button> 
							</form>
							</div>
						</div>											
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

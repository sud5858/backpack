@extends('layouts.app')

@section('content')

<!-- about -->
		<div class="privacy about">
			<h3>{!!$page->title!!}</h3>
			<p class="animi">{!!$page->content!!}</p>
			
		</div>
<!-- //about -->


<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				
				<h3>{{$page->servicename}}</h3>
				<p> {!! \Illuminate\Support\Str::words($page->servicdescription,80)!!}</p>
				<button class="btn btn-danger">Read More</button>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>{{$page->quality}}</h3>
				<p>{{$page->quality_description}}</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>{{$page->delivery_network}}</h3>
				<p>{{$page->delivery_description}}</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>




@endsection
		

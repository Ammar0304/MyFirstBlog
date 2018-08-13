@extends('blog/user/layout/app')
@section('content')
	<div  id="about">	
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="agile-heading">
				<h3>Latest Blogs</h3>
			</div>
			<div class="agileinfo-gallery">
				@if($posts->all() > 1)
		           @if(isset($first_post))
					<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a href="{{ $first_post->featured }}" data-lightbox="example-set" data-title="{{ $first_post->content }}">
						<img src="{{ $first_post->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true">{{ $first_post->title  }}</i>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $first_post->created_at->diffForHumans()}}</h4></h3>
						</div>
					</a>
				</div>	
				  @endif
		         
                   @if(isset($second_post))
					<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a href="{{ $second_post->featured }}" data-lightbox="example-set" data-title="{{ $second_post->content }}">
						<img src="{{ $second_post->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true">{{ $second_post->title  }}</i>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $second_post->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>
				  @endif
                   @if(isset($third_post))

					<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a href="{{ $third_post->featured }}" data-lightbox="example-set" data-title="{{ $third_post->content }}">
						<img src="{{ $third_post->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true">{{ $third_post->title  }}</i>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $third_post->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				  @endif
                   @if(isset($fourth_post))

					<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a href="{{ $fourth_post->featured }}" data-lightbox="example-set" data-title="{{ $fourth_post->content }}">
						<img src="{{ $fourth_post->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true">{{ $fourth_post->title  }}</i>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $fourth_post->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				  @endif

				@else
				<div class="agile-heading">
				    <h3>There is no Blogs</h3>
			    </div>
			    @endif
			

					
				
				
				
				
				
				
				<div class="clearfix"> </div>

				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>	

		</div>	
	</div>	
		</div>
			<div class="team jarallax" id="team">
		<div class="team-dot">
			<div class="container-fluid">
			@if(isset($cat1))
					<div class="agile-heading team-heading">

					<h3>{{ $cat1->name }}</h3>
				</div>
				<div class="wthree-news-grids">
			    
				@foreach($cat1->posts()->orderBy('created_at','desc')->take(3)->get() as $cat)

					<div class="col-md-4 w3-agileits-gallery-grids gallery-one wthree">
					<a href="{{ $cat->featured }}">
						<img src="{{ $cat->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<br><br><br>
							<h3 style="color:white;">{{ $cat->title  }}</h3>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $cat->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				@endforeach
			
			
				<div class="clearfix"> </div>
			</div><br>
			@endif
			
						@if(isset($cat2))
					<div class="agile-heading team-heading">

					<h3>{{ $cat2->name }}</h3>
				</div>
				<div class="wthree-news-grids">
			    
				@foreach($cat2->posts()->orderBy('created_at','desc')->take(3)->get() as $cat)

					<div class="col-md-4 w3-agileits-gallery-grids gallery-one wthree">
					<a href="{{ $cat->featured }}">
						<img src="{{ $cat->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<br><br><br>
							<h3 style="color:white;">{{ $cat->title  }}</h3>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $cat->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				@endforeach
			
			
				<div class="clearfix"> </div>
			</div><br>
			@endif

						@if(isset($cat3))
					<div class="agile-heading team-heading">

					<h3>{{ $cat3->name }}</h3>
				</div>
				<div class="wthree-news-grids">
			    
				@foreach($cat3->posts()->orderBy('created_at','desc')->take(3)->get() as $cat)

					<div class="col-md-4 w3-agileits-gallery-grids gallery-one wthree">
					<a href="{{ $cat->featured }}">
						<img src="{{ $cat->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<br><br><br>
							<h3 style="color:white;">{{ $cat->title  }}</h3>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $cat->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				@endforeach
			
			
				<div class="clearfix"> </div>
			</div><br>
			@endif
							@if(isset($cat4))
					<div class="agile-heading team-heading">

					<h3>{{ $cat4->name }}</h3>
				</div>
				<div class="wthree-news-grids">
			    
				@foreach($cat4->posts()->orderBy('created_at','desc')->take(3)->get() as $cat)

					<div class="col-md-4 w3-agileits-gallery-grids gallery-one wthree">
					<a href="{{ $cat->featured }}">
						<img src="{{ $cat->featured }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<br><br><br>
							<h3 style="color:white;">{{ $cat->title  }}</h3>
							<h3 style="color:white;">Created At<h4 style="color:white;">{{ $cat->created_at->toFormattedDateString()}}</h4></h3>
						</div>
					</a>
				</div>	
				@endforeach
			
			
				<div class="clearfix"> </div>
			</div><br>
			@endif


			</div>
		</div>
	</div>
@stop
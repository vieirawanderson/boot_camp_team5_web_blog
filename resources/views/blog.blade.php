@extends('layout/template')


@section('content')
	<!-- .blog-post -->
	@foreach ($posts as $post)	

	    <article class="blog-post wow fadeInUp" data-wow-duration="1s">
	      <span class="blog-date">
	        {!! $post->dia !!}
	        <small class="blog-month">{!! $post->mes !!}</small>
	      </span>
	      <div class="blog-body">
	        <header class="entry-header">
	          <a  href="blog-potencial-crm.html">
	        <img src={!! $post->image !!} alt="post 4" class="img-responsive img-full" />
	            <div class="image-overlay">
	              <p>
	                <span class="show-image">
	                  <i class="iline2-arrow423"></i>
	                </span>
	              </p>
	            </div>
	          </a>
	        </header>
	        <h4 class="text-primary text-center text-uppercase mar-top-sm">{!! $post->title !!}</h4>
	        <p>
	        	{!! $post->shortContent !!}

	        <a class="btn btn-primary text-uppercase" href="{{url('blog_post',$post->url)}}" role="button" title="continue reading"> Leia Mais</a>
	      </div>
	    </article>

	@endforeach

@endsection

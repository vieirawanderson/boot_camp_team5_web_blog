@extends('layout/template')


@section('content')
	<!-- .blog-post -->

    <div class="post-detail sep-bottom-lg">
        <figure class="no-margin">
          <a href="#modalContato" role="button" data-toggle="modal"><img src="{{ URL::asset('assets/images/e-book.jpg') }}" alt="Baixe seu e-book!" class="img-responsive"/></a>
        </figure>
        <div class="post-detail-body sep-xs">
          
          </br>
          </br>
          
          <hr>
          <p>
             <h3 style="text-align:center;">Baixe o seu e-book <b> GRATUITO</b> com todas as dicas para acelerar seu negócio.</h3>
             </br>
             <h1 class="text-center"><a href="#modalContato" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Baixar e-book</a></h1>
          </p>
          <hr>

        </div>
      </div>

@endsection

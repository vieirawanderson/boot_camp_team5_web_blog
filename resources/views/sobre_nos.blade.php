@extends('layout/template')


@section('content')
	<!-- .blog-post -->

    <div class="post-detail sep-bottom-lg">
        <figure class="no-margin">
          <img src="{{ URL::asset('assets/images/logo2.png') }}" alt="" class="img-responsive" />
        </figure>
        <div class="post-detail-body sep-xs">
          <h3 class="text-uppercase" >Sobre Nós</h3>
          <span class="line-sep-gray"></span>
          <p>
            A Gold tem como objetivo auxiliar empresários e gestores no gerenciamento de seus clientes, com foco no crescimento das vendas e melhor performance de equipe.
            </br></br>
            Oferecemos dicas relacionadas ao ambiente empresarial, gestão financeira, comercial e de RH, além de indicações de ferramentas e estratégias que visam o desenvolvimento e crescimento de empresas.
          </p>
          
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

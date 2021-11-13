@extends('layout/index')

@section('conteudo')
    <div style="padding-top: 10px"id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="imgC"src="img/c1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Comidas Típicas</h5>
                        <p>Aqui você encontra as comidas mais procuradas de cada região!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="imgC" src="img/c2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pizza! Mama mia!!</h5>
                        <p>Aqui também servimos pizza a famosa moda italiana!</p>
                    </div>
                </div>
            <div class="carousel-item">
                <img id="imgC" src="img/c3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sobremesas</h5>
                    <p>As mais delicioas sobremasas você encontra aqui!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <h1 id="h1">
        Bem Vindo ao Sua Refeição!
    </h1>
    <p>
        Aqui você encontra as melhores refeições para acabar com sua fome!!
        confira já o nosso <a href="/cardapio">cardápio</a> e faça o seu <a href="/pedido">pedido!</a>!!
    </p>
    <h2>Quem Somos?</h2>
    <p>
        A Sua Refeição é uma empresa que visa trazer para o cliente uma variedade para seu paladar, buscando deixar a vida com o gostinho mais alegre e proporcionar momentos invríveis com os nossos alimentos!
    </p>
@endsection
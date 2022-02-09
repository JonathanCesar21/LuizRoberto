@extends('layouts.main')
@section('title', 'Luiz Roberto Nutri')
@section('content')

<div class="container-flex img-bg-home  text-banner">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>QUER MUDAR SEU ESTILO DE VIDA?</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center icons-px text-info">
            <h2>Quem Sou?</h2>
            <img src="img/icons/carne.png" alt="">
            <img src="img/icons/trigo.png" alt="">
        </div>
    </div>
</div>
<div class="container bg-card">
    <div class="row">
        <div class="col-md-6 text-center">
            <h2>Luiz Roberto</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi beatae quae illum optio non velit tempora, rem architecto numquam quis cupiditate, vel dignissimos! Porro error perferendis alias nisi facilis modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nemo, expedita quibusdam inventore cumque unde esse. Labore autem quibusdam recusandae dolores nam error voluptatem, dolorem quod cum et. Eum, voluptatibus.</p>
        </div>
        <div class="col-md-6 text-center luiz-img">
        <img src="img/luiz.png" alt="">
        </div>
    </div>
</div>

<div class="container-flex bg-color paciente-img">
    <div class="row">
        <div class="col-md-12 text-center text-info-green">
            <h2>Resultados dos meus pacientes</h2>
            <p>"Não tenha medo de falhar. Esse é o caminho para o sucesso." -LeBron James</p>
        </div>
        <div class="col-md-4 text-center">
        <img src="img/paciente1.jpg" alt="">
        </div>
        <div class="col-md-4 text-center">
        <img src="img/paciente7.jpg" alt="">
        </div>
        <div class="col-md-4 text-center">
        <img src="img/paciente3.jpg" alt="">
        </div>
        <div class="col-md-6 text-center">
        <img src="img/paciente4.jpg" alt="">
        </div>
        <div class="col-md-6 text-center">
        <img src="img/paciente8.jpg" alt="">
        </div>
        
        <div class="col-md-12 text-center">
        <form class="form-inline my-2 my-lg-0">
      <button class="btn-evolucoes my-2 my-sm-0" type="submit">Veja Mais Evoluções -></button>
         </form>
        </div>
       
    </div>
</div>

<div class="container-flex text-info bg-color-white img-insta">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Reposts dos pacientes</h2>
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta1.png" alt="">
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta2.png" alt="">
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta3.png" alt="">
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta4.png" alt="">
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta5.png" alt="">
        </div>
        <div class="col-md-4 text-center">
           <img src="img/pacienteinsta6.png" alt="">
        </div>
        <div class="col-md-12 text-center">
        <form class="form-inline my-2 my-lg-0">
      <button class="btn-instagram my-2 my-sm-0" type="submit">Acesse meu Instagram</button>
         </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center text-info icons-px2">
            <img class="circle"src="img/icons/map.png" alt="">
            <h2>Onde Estou Localizado?</h2>
        </div>
    </div>
</div>


<div class="container-flex">
    <div class="row">
        <div class="col-md-12 maps-iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1644334615902!6m8!1m7!1sp3o0-ULfsZWiGHeUlP0ANg!2m2!1d-20.32621197250693!2d-48.31318180485349!3f349.5567332622073!4f2.6792620002247105!5f0.6644147374995271" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>




@endsection
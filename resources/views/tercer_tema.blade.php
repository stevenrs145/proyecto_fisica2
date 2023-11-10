@include('includes.head')
<link href="{{ asset('css/primera.css') }}" rel="stylesheet">

<body>
    <div id="app">
    @include('includes.navbar')
    @include('includes.sidenav')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
   
       
     
    <div class="container caratula-contenedor">
        <div class="row text-center">
            <div class="col-12 caratula-text1" >
                <p>
                    Integracion por partes
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-left">
                <img src="{{ URL::asset('img/partes 2.png')}}" alt="logo" class="img-partes" >
            </div>
            <div class="col-6 text-rigth">
                <img src="{{ URL::asset('img/partes1.png')}}" alt="logo" class="img-partes2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 text-center ">
            <iframe width="1320" height="415" src="https://www.youtube.com/embed/H0Bf_ZelH2w?si=yqZVLKHlwj0WsQpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            </div>
            </div>
        </div>
    </div>
</div>






</body>



@include('includes.footer')

</html>
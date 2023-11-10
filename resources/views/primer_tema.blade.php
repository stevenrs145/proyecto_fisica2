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
                    Integracion por sustitucion
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-left">
                <img src="{{ URL::asset('img/integracion_sustitucion1.png')}}" alt="logo" class="img-tema" >
            </div>
            <div class="col-6 text-rigth">
                <img src="{{ URL::asset('img/integracion_sustitucion2.png')}}" alt="logo" class="img-tema2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 text-center video">
                <iframe width="1280" height="370" src="https://www.youtube.com/embed/Zkgs2Kn_spY?si=dpaT23WhVoy1BHu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
            </div>
        </div>
    </div>
</div>






</body>



@include('includes.footer')

</html>
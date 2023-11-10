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
                    Integracion por sustitucion trigonometricas                
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ URL::asset('img/trigonometrica1.png')}}" class="trigonometrica" alt="logo">
            </div>
            <div class="col-12 text-center video">
                <iframe width="1050" height="400" src="https://www.youtube.com/embed/UOiceCLeE5Y?si=H7LJY5FJbl9I3ehU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
            </div>
        </div>
    </div>
</div>






</body>



@include('includes.footer')

</html>
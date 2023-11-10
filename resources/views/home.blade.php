@include('includes.head')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

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
        <div class="row">
            <div class="col-3">
            <img src="{{ URL::asset('img/formal.png')}}" class="foto_presentacion" alt="presentacion">
            </div>
            <div class="col-9">
                <div class="caratula-text1 text-left">
                    <p>
                        Ingeneria en sistemas <br> Universidad Mariano Galvez <br> Curso: Fisica 2 <br> Ing. Raul R. <br>    
                    </p>
                </div>
                <div class=" caratula-img text-center">
                    <img src="{{ URL::asset('img/Mariano_galvez.png')}}" class="logo" alt="logo">
                </div>
                <div class="caratula-text2 text-right">
                    <p>
                        Steven Eduardo Rodriguez Solares <br> 7690-21-2665        
                    </p>
                </div>
                <div class="titulo-principal content text-right">
                    <h1 class="">Proyecto Final</h1>
                </div>
            </div>
           
        </div>
    </div>
</div>






</body>



@include('includes.footer')

</html>
@extends('layouts.template')


@section('content')
<section class="container-fluid bg-light d-flex flex-column align-items-center justify-content-center py-4">
        <h1 class="fs-3">MacBook Air M1 2021</h1>
        <div class="d-flex justify-content-center">
            <div class="bg-warning x-deco"></div>
        </div>
        
</section>


<section class="container-fluid mb-5 py-4">
    <div class="row">
        <div class="col-7 d-flex justify-content-center">
                       <div class="sketchfab-embed-wrapper "> <iframe title="[FREE] BAPE x Reebok Club C 85 White Sneaker" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/6b99ce54f6d44d6ab5456febfcd3148b/embed?ui_infos=0" class="x-product-iframe"> </iframe> </div>
        </div>

        <div class="col-5">
            <h1 class="x-text-size-md">MacBook Air M1 2021</h1>
            <div class="x-text-fs4 mb-2">
                Reference : 458 585 85
            </div>

            <div class="d-flex mb-2">
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="fas fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            <i class="far fa-star text-warning me-1"></i>
                            
             </div>

             <h3 class="x-text-fs4 ">PRIX</h3>

             <h2 class="x-text-size-xs">1 100 000 FCFA</h2>

             <a href="" class="btn btn-warning rounded-pill p-1 px-3 text-white mb-3"> Ajouter au panier</a>

             <h6>Description du produit </h6>

             <div class="text-justify col-8">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequatur sequi et nisi beatae culpa reiciendis libero enim, possimus quis, quae id pariatur officiis maxime aliquam corporis velit a atque?
             </div>
            
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script type="text/javascript" src="https://static.sketchfab.com/api/sketchfab-viewer-1.12.0.js"></script>

 <script type="text/javascript">
    var iframe = document.getElementById( 'api-frame' );
    var uid = '7w7pAfrCfjovwykkEeRFLGw5SXS';

    // By default, the latest version of the viewer API will be used.
    var client = new Sketchfab( iframe );

    // Alternatively, you can request a specific version.
    // var client = new Sketchfab( '1.12.0', iframe );

    client.init( uid, {
        success: function onSuccess( api ){
            api.start();
            api.addEventListener( 'viewerready', function() {

                // API is ready to use
                // Insert your code here
                console.log( 'Viewer is ready' );

            } );
        },
        error: function onError() {
            console.log( 'Viewer error' );
        }
    } );
    </script>

@endpush
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@foreach($Productos as $p)
<div class="card">
  <a href="{{ URL('/') }}/Productos/{{ $p->SKU }}" class="title font-weight-bold">
    <div class="card-image">
      <figure class="image is-4by3">
        <img src="https://pngimg.com/uploads/raincoat/raincoat_PNG53.png" alt="Placeholder image">
      </figure>
    </div>
    <div class="card-content">
      <img class="card-img-top" style="max-width:5%;height: auto;padding: 0 10;"
                        src="" alt="">
                    <br>
                    <div class="col  col-centered">
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            (1)
                        </div>
                    </div>
  
      <div class="content">
        <div class="panel-heading">
          <h4 style="display: inline;font-weight: 700;"> {{ $p->Descripcion }}
          </h4>
      </div>
      <div class="card-text">
          <div class="price-wrap">
              <span class="price-new h3 col-centered" style="color: #0597d9;">
                  $ {{ number_format($p->Precio, 0, ',', '.') }}
              </span>
              <div>
                  <label class="btn col-centered btn-default"
                      style="color: white;background-color: #0597d9;">Mas informacion
                  </label>
              </div>
          </div>
      </div>
      </div>
  </a>
  </div>
</div>
@endforeach
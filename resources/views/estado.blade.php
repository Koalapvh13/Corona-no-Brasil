<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <title>{{$dadosEstado->nome}}</title>
</head>
<body>
    <div class="container pt-5">
        <!-- Bandeira -->
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="{{$dadosEstado->bandeira}}" alt="">
              </div>
        </div>

         <!-- Nome do Estado -->
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="text-center text-uppercase font-weight-bold display-4 mt-3">{{$dadosEstado->nome}}</h1>
              </div>
        </div>

         <!-- Dados sobre o corona -->
        <div class="row">
            <div class="col-12">
                <div class="card-deck">
                    <!-- Confirmados -->
                    <div class="card text-white bg-danger mb-3 m-3">
                           <div class="card-header font-weight-bold text-uppercase text-center">Confirmados</div>
                           <div class="card-body">
                             <h1 class="card-title text-center font-weight-bold display-2">{{$dadosEstado->confirmado}}</h1>
                        </div>
                    </div>

                     <!-- Suspeitos -->
                    <div class="card text-white bg-warning mb-3 m-3">
                        <div class="card-header font-weight-bold text-uppercase text-center">Suspeitos</div>
                        <div class="card-body">
                          <h1 class="card-title text-center font-weight-bold display-2">{{$dadosEstado->suspeito}}</h1>
                     </div>
                   </div>

                    <!-- Letais -->
                   <div class="card text-white bg-dark mb-3 m-3">
                        <div class="card-header font-weight-bold text-uppercase text-center">Letais</div>
                        <div class="card-body">
                           <h1 class="card-title text-center font-weight-bold display-2">{{$dadosEstado->letal}}</h1>
                        </div>
                   </div>

                   <!-- Descartados -->
                   <div class="card text-white bg-info mb-3 m-3">
                        <div class="card-header font-weight-bold text-uppercase text-center">Descartados</div>
                        <div class="card-body">
                           <h1 class="card-title text-center font-weight-bold display-2">{{$dadosEstado->descartasdo}}</h1>
                        </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-12 d-flex justify-content-center">
                 <small class="text-muted text-center">Atualizado em: {{$dadosEstado->updated_at}}</small>
            </div>
        </div>
        @if ($dadosEstado->sigla !== "BR")
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h3 class="mt-4 text-uppercase text-center"><a href="/">Outros Estados</a></h3>
                </div>
            </div>
        @endif

       @if($dadosEstado->lista !== null)
        <div class="row">
            <div class="col-12">
               <div class="card-columns mt-5">
                   @foreach ($dadosEstado->lista as $estado)
               <a href="/{{$estado->sigla}}">
                         <div class="card">
                            <img class="card-img-top border" src="{{$estado->bandeira}}" alt="{{$estado->nome}}">
                            <h4 class="card-title text-uppercase text-center mt-2"> {{$estado->nome}} </h4>
                        </div>
                   </a>
                   @endforeach
               </div>
           </div>
       </div>
       @endif
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>
</html>

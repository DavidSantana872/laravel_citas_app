<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Citas</title>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        function desaparecerAlerta() {
            $("#Alerta").css("display", "none"); // Usando fadeOut para un efecto de desaparición suave
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<p class="h2 bg-dark text-white p-3 w-100" style="position: fixed; z-index:100">
    <a class="btn btn-dark" onclick="window.location.href='{{ route('inicio.app') }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
    </a> Citas Agendadas
</p>
<br>
<br>
<br>
<br>
<div class="container p-3" id="Alerta">
    @if(session('success'))
        <div class="alert alert-warning">
            {{ session('success') }}
        </div>
        <script>
             setTimeout(() => {
                desaparecerAlerta()
            }, 2000);
        </script>
    @endif
</div>
<div class="container border pt-2 rounded" style="">
    <p class="lead">
        Resumen
    </p>
    <div class="container" style="overflow-y: auto;">
        <div class="row">
            @foreach($citas as $cita)
                <div class="col-md-4">
                    <form action="{{route('eliminar.cita', ['id' => $cita->id])}}" method="POST">
                        @csrf
                    <div class="card text-center m-3">
                        <div class="card-header">
                            <h5>
                                {{$cita -> titulo}}
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$cita -> descripcion}}</p>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                        <div class="card-footer text-muted">
                            {{$cita -> fecha}}
                        </div>
                    </div>
                </form>
                </div>
            @endforeach
        </div>
    </div>
    
</div>

<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Cita</title>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        function desaparecerAlerta() {
            $("#Alerta").css("display", "none"); // Usando fadeOut para un efecto de desaparición suave
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<p class="h2 bg-primary text-white p-3">
    <a class="btn btn-primary" onclick="window.location.href='{{ route('inicio.app') }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
          </svg>
    </a> Agregar Cita
</p>
<br><br>
<div class="container p-3" id="Alerta">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <script>
             setTimeout(() => {
                desaparecerAlerta()
                setTimeout(
                    () => {
                        //window.location.href = "/citasapp"
                    }, 500
                )
            }, 2000);
        </script>
    @endif
</div>
<div class="container border p-3 rounded">
    <h3 class="pt-3 pl-3 pb-3">
        Información de la cita 
    </h3>
    <form method="POST" action="{{ route('agregar.cita.db') }}">
        @csrf
        <div class="row">
            <div class=" col">
                <div class="mb-3">
                     <div class="input-group">
                      <span class="input-group-text" id="basic-addon3">Titulo</span>
                      <input required type="text" class="form-control" id="Titulo" name="Titulo" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                </div>
            </div>
            <div class=" col">
                <div class="mb-3">
                     <div class="input-group">
                      <span class="input-group-text" id="basic-addon3">Fecha</span>
                      <input required type="date" class="form-control" id="Fecha" name="Fecha" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="Titulo">Descripción:</label>
            <textarea required class="form-control" placeholder="Descripcion de la cita" name="Decripcion"></textarea>
        </div>
        <div class="d-flex w-100 justify-content-center mt-5">
          <div class="d-flex w-50 justify-content-sm-around">
            <div >
                <a class="btn btn-danger m-2" onclick="window.location.href='{{ route('inicio.app') }}'">
                    Cancelar
                </a>
                
               </div>
               <div class=" ">
                <button class="btn btn-success m-2" type="submit">
                    Agregar
                </button>
               </div>
          </div>
        </div>
    </form>
    <br>
</div>


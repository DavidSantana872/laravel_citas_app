<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



<div class="container mt-5 w-100 text-muted  p-0 rounded ">
    <div class="row">
        <div class="text-left mb-6 col m-1">
            <h1 class="display-1" style="font-weight: bold;">Recuerda Tus Citas</h1>
            <p class="">
                <ul>
                    <li>📅 Organiza tu tiempo, maximiza tu día.</li>
                    <li>🕒 Agenda tus citas con nosotros</li>
                    <li>✅ Mantén todo bajo control.</li>
                </ul>
            </p>
        </div>
        <div class="col-4 text-center">
            <div class="d-flex flex-column justify-content-lef align-items-start pr-5 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-journal-bookmark-fill mt-2 " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5.5 0 0 1 0-1z"/>
                </svg>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container w-75">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <button onclick="window.location.href='{{ route('agregar.cita') }}'" class="btn btn-primary w-75 m-1 p-2 rounded d-flex align-items-center justify-content-center">
                <span class="me-2" style="font-size: 1.5rem">Agregar</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
            </button>
        </div>
        <div class="col d-flex justify-content-center">
            <button onclick="window.location.href='{{ route('ver.citas') }}'" class="btn btn-dark w-75 m-1 p-2 rounded d-flex align-items-center justify-content-center">
                <span class="me-2" style="font-size: 1.5rem">Ver Citas</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
            </button>
        </div>
    </div>
</div>
<div style="position: fixed; bottom: 0; width: 100%; z-index: -1;">
    <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="animate-wave">
        <path d="M 0,400 L 0,150 C 167.7333333333333,179.06666666666666 335.4666666666666,208.13333333333335 491,192 C 646.5333333333334,175.86666666666665 789.8666666666668,114.53333333333333 946,100 C 1102.1333333333332,85.46666666666667 1271.0666666666666,117.73333333333333 1440,150 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="#1d6efd" fill-opacity="1"></path>
    </svg>
</div>
<style>
    @keyframes waveAnimation {
        0% {
            d: path("M 0,400 L 0,150 C 167.7333333333333,179.06666666666666 335.4666666666666,208.13333333333335 491,192 C 646.5333333333334,175.86666666666665 789.8666666666668,114.53333333333333 946,100 C 1102.1333333333332,85.46666666666667 1271.0666666666666,117.73333333333333 1440,150 L 1440,400 L 0,400 Z");
        }
        50% {
            d: path("M 0,400 L 0,120 C 160,180 320,240 480,200 C 640,160 800,80 960,100 C 1120,120 1280,180 1440,140 L 1440,400 L 0,400 Z");
        }
        100% {
            d: path("M 0,400 L 0,150 C 167.7333333333333,179.06666666666666 335.4666666666666,208.13333333333335 491,192 C 646.5333333333334,175.86666666666665 789.8666666666668,114.53333333333333 946,100 C 1102.1333333333332,85.46666666666667 1271.0666666666666,117.73333333333333 1440,150 L 1440,400 L 0,400 Z");
        }
    }
    
    .animate-wave path {
        animation: waveAnimation 4s ease-in-out infinite;
    }
    </style>
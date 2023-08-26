<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark nav">
        <div class="container-fluid color">
            <a class="navbar-brand">Semillero</a>
        </div>
    </nav>

    <div class="contenedor text-center">

        <img class="logo" src="semilleros/imagenes/logoU.png" alt="">

        <form class="d-flex flex-column align-content-center flex-wrap" action= "{{route('userlogin')}}" method= "GET" id="miFormulario">
            @csrf

            <div class="form-outline mb-4 col-3">
                <input type="text" id="form2Example1" class="form-control" name="usuario" />
                <label class="form-label" for="form2Example1" >Usuario</label>
            </div>
            
            <div class="form-outline mb-4 col-3">
                <input type="password" id="form2Example2" class="form-control" name="password"/>
                <label class="form-label" for="form2Example2">Contraseña</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
        
        
        </form>
        
    </div>

</body>
<style>

    body{
        background:  #efefef;
    }
    .contenedor{
        position: absolute;
        width: 100%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
    }

    .logo{
        width:30vw;
    }

</style>
<script>
    
    // document.addEventListener('DOMContentLoaded', function() {
    //     const formulario = document.getElementById('miFormulario');
    //     formulario.addEventListener('submit', function(event) {
            
    //         localStorage.clear();
    //         event.preventDefault();

    //         const formData = new FormData(formulario);
    //         const formDataObject = {};

    //         formData.forEach((value, key) => {
    //             formDataObject[key] = value;
    //         });

    //         localStorage.setItem('formularioData', JSON.stringify(formDataObject));

    //         const valorLocalStorage = localStorage.getItem('formularioData');

    //         window.location.href = "/generales/pais";

    //         });
    //     });
</script>
</html>

    






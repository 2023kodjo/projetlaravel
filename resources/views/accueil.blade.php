 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Projeteleve</title>
 </head>
 <body class="f">

<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
      <button><li><a href="{{route('accueil')}}" class="nav-link px-2 text-white">Accueil</a></li></button>
      <button><li><a href="{{route('liste')}}" class="nav-link px-2 text-secondary">lister</a></li></button>
      </ul>

      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Recherche..." aria-label="Search">
      </form> -->

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Connexion</button>
        <button type="button" class="btn btn-warning">S'inscrire</button>
      </div>
    </div>
  </div>
</header>

<div class="b-example-divider bg-danger text-center text-white py-2">
  <h5>Bienvenue sur la page d'inscription</h5>
 </div>
          <div class="card col-md-4 bg-success mx-auto d-block mt-3 text-white">
        <div class="card-body">
        <form action="{{route('accueil')}}" method="post">
        @csrf
        @method('post')
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Prénom</label>
  <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email"  name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Téléphone</label>
  <input type="number"  name="telephone" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
</div>
     <button class="btn btn-dark form-control" type="submit">Enrégistrer</button>
    </form>

        </div>
     </div>
   


     @include('footer')

    <script src="{{ asset('js/boostrap.min.js')}}"></script>
 </body>
 </html>
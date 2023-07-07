
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Projeteleve</title>
 </head>
 <body class="f2">
<header class="p-3 text-bg-dark">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <button><li><a href="{{route('accueil')}}" class="nav-link px-2 text-secondary">Accueil</a></li></button>
        <button><li><a href="#" class="nav-link px-2 text-white">Liste</a></li></button>
      </ul> 
      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
      </form> -->
      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Connexion</button>
        <button type="button" class="btn btn-warning">S'inscrire</button>
      </div>
      </div>
  </div>
</header>
<div class="container mt-5 SessionM">
        <div class="row">
            <div class="col text-center bg-success text-white">
               <h2>FAIRE UNE MODIFICATION</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <form class=" offset-3 col-md-6 form shadow bg-danger text-white"  action="/modifier/traitement" method="POST" >
                @csrf
                    <input type="text"  style="display: none;" name="id" value="{{ $contacts->id }}"/>
                    <br>
                    <div class="row offset-2 col-md-8">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="{{ $contacts->nom }}"/>
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom"
                    value="{{ $contacts->prenom }}"/>
                    </div>
                    <div class="row offset-2 col-md-8">
                    <label for="email">Email :</label>
                    <input type="text" name="email"
                    value="{{ $contacts->email }}"/>
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="telephone">Téléphone :</label>
                    <input type="text" name="telephone"
                    value="{{ $contacts->telephone }}"/>
                        </div>

                        <div class="row offset-4 col-md-4 my-4 ">
                        <input type="submit" value="Modifier" class="btn bg-dark text-white btn-outline-primery my-2">
                        </div>
                </form>
                <a href="{{route('liste')}}"><button type="button" class="btn btn-outline-danger my-4 offset-9 col-md-2">Retour</button></a>
            </div>
        </div>

    </div>


          @include('footer')
  
    <script src="{{ asset('js/boostrap.min.js')}}"></script>
 </body>
 </html>
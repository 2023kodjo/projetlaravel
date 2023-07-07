
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Projeteleve</title>
 </head>
 <body>

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
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Recherche..." aria-label="Search">
      </form> -->

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Connexion</button>
        <button type="button" class="btn btn-warning">S'inscrire</button>
      </div>
      </div>
  </div>
</header>


<div class="container-fuid">
    <div class="row">
        <div class=" pt-2 offset-2 col-md-8 text-center text-white bg-danger mt-5 ">
            <h2>Listes des élèves</h2>
          </div>
    </div>
    <br>
    <div class="container">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif
    <table class="table table-striped table-bordered shadow fw-bold">
      <thead>
				<tr class="  table-primary">
				  <th>N°</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
         <th>Téléphone</th>
					<th></th><th class="col bg-primary text-white text-center">Action</th><th></th>  
				</tr>
        </thead>
        <tbody>
          @php 
              $ide = 1;
          @endphp
@forelse ($contacts as $contact)
                        <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->nom}}</td>
                        <td>{{$contact->prenom}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->telephone}}</td>
                        <td><a class="btn btn-dark" href="{{route('detail', $contact->id)}}">Détail</a></td>

                        <td><a class="btn btn-success" href="/modifier/{{ $contact->id }}">Modifier</a></td>
                        
                        <td><a class="btn btn-danger" href="{{route('supprimer', $contact->id)}}">Supprimer</a></td>
                        </tr>
                        @php
                             $ide +=1;
                        @endphp
@empty
@endforelse
                        </tbody>
                        </table>
                        {{$contacts->links() }}
                        </div>
<br>
  @include('footer')
  
    <script src="{{ asset('js/boostrap.min.js')}}"></script>
 </body>
 </html>
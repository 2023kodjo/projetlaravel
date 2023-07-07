
<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>Projeteleve</title>
 </head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col text-white text-center bg-success">
               <h1>Détails de l'étudiant</h1>
            </div>
        </div>
        <br>
    
        <table class="table table-striped table-bordered shadow">
            <tr>
                <th>Nom :</th>
                <td>{{ $contacts->nom }}</td>
            </tr>
            <tr>
                <th>Prénom :</th>
                <td>{{ $contacts->prenom }}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{ $contacts->email }}</td>
            </tr>
            <tr>
                <th>Téléphone :</th>
                <td>{{ $contacts->telephone }}</td>
            </tr>
        </table>
    </div>
    <div class="offset-1 col-md-4 py-3 p mt-4">
        <a href="{{ route('liste') }}"><button type="button" class="btn btn-danger">Retour</button></a>
    </div>
<br><br><br><br><br><br><br><br>
    @include('footer')
  
  <script src="{{ asset('js/boostrap.min.js')}}"></script>
</body>
</html>

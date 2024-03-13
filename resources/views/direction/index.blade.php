@extends('./visiteur.adminnav')
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Tableau de bord</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        @include('header')
        <!-- /.row -->
      </div>
    </section>
    <div class="container">
        <table class="table table-collapse" id="tabsous">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">libelle</th>
                {{-- <th scope="col">Nom</th> --}}
                <th scope="col">Telephone</th>
                <th scope="col">E-mail</th>
                <th scope="col">plus </th>

              </tr>
            </thead>
            <tbody>
                @forelse ($directions as $vis)
                <tr>
                    <th scope="row">{{ $vis->id }}</th>
                    {{-- <td>{{ $vis->prenom }}</td> --}}
                    <td>{{ $vis->libelle }}</td>
                    <td>{{ $vis->tel }}</td>
                    <td>{{ $vis->email }}</td>
                    <td><a href="{{ route('accueil.show',$vis->id) }}" class="btn btn-warning"> Modifier</a></td>
                  </tr>
                @empty
                <td>pas de données</td>
                @endforelse
             
            
            </tbody>
        </table>    
        <script>
            $(document).function () {
                $('#tabsous').DataTable();
            }
        </script>
    </div>    
@endsection


@extends('./caisse.base')

@section('main')
  
<div class="container ">
    <h1 style="text-align: center; margin-top:80px;">bienvenue dans la caisse</h1>
    <div class="card">

        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Vente Ticketing</h4>
            <p class="card-subtitle mb-4" style="text-align:center">caissiere du cabinet Medicale Yaye Fatou Ndiaye .</p>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
          @endif
           <form action="{{route('charges.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-sm-6">
                {{-- <input type="hidden" class="form-control" maxlength="25" name="id" value="{{$id}}" id="defaultconfig" /> --}}
                <label>Libelle Charge</label>
                <input type="text" class="form-control" maxlength="25" name="libelle" id="defaultconfig" />
            </div>
            <br>
            <div class="form-group col-sm-6">
                <label>montant</label>
                <input type="number" maxlength="25" name="montant" class="form-control" id="thresholdconfig" />
            </div>
        </div>
        
            <div class="form-group">
                <input type="submit" value="nouveau Charge " class="btn btn-primary"> 
                <input type="reset" value="Annuler" class="btn btn-danger">
            </div>
           </form>

            

        </div> <!-- end card-body-->
</div>
@endsection
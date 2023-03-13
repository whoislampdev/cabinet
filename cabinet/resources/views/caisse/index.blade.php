@extends('./caisse.base')

@section('main')
  
<div class="container ">
    <h1 style="text-align: center; margin-top:80px;">bienvenue dans la caisse</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Vente Ticketing</h4>
            <p class="card-subtitle mb-4" style="text-align:center">caissiere du cabinet Medicale Yaye Fatou Ndiaye .</p>
           <form action="{{route('ticket.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-sm-6">
                <input type="hidden" class="form-control" maxlength="25" name="id" value="{{$id}}" id="defaultconfig" />
                <label>Nom</label>
                <input type="text" class="form-control" maxlength="25" name="nom" id="defaultconfig" />
            </div>
            <div class="form-group col-sm-6">
                <label>Prenom</label>
                <input type="text" maxlength="25" name="prenom" class="form-control" id="thresholdconfig" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Adresse</label>
                <input type="text" class="form-control" maxlength="25" name="adresse" id="placement" />
            </div>
            <div class="form-group col-sm-6">
                <label>Ages</label>
                <input type="text" class="form-control" maxlength="25" name="age" id="alloptions" />
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Telephone</label>
                <input type="text" class="form-control" maxlength="25" name="telephone" id="alloptions" />
            </div>
            <div class="form-group  col-sm-6">
                <label>Type de Tickets</label>

               <select name="acte" id="" class="form-control">
                @forelse($all_acte as $acte )
                    
               
                <option value="{{$acte->nom}}">{{$acte->nom}} {{$acte->prix}}</option>
              @empty
              <option value="">pas de Categorie</option>
              @endforelse
               </select>
              
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Date Vente</label>
                <input type="date" class="form-control" maxlength="25" name="date_vente"   value="<?php echo date("Y-m-d");?>" id="alloptions" />
            </div>
            <div class="form-group col-sm-6">
                <label>Heure de Vente </label>
                <input type="time" class="form-control" maxlength="25" name="heure_vente"   value="<?php echo date("H:i:s");?>" id="alloptions" />
              

               </select>
            </div>
        </div>
            <div class="form-group">
                <input type="submit" value="effectuer vente " class="btn btn-primary"> 
                <input type="reset" value="Annuler" class="btn btn-danger">
            </div>
           </form>

            

        </div> <!-- end card-body-->
</div>
@endsection
@extends('./caisse.base')

@section('main')
  
<div class="container ">
    <h1 style="text-align: center; margin-top:80px;">bienvenue dans la caisse</h1>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title" style="text-align:center">Vente Ticketing</h4>
            <p class="card-subtitle mb-4" style="text-align:center">caissiere du cabinet Medicale Yaye Fatou Ndiaye .</p>
           <form action="">
            @csrf
            <div class="row">
            <div class="form-group col-sm-6">
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
               <select name="type_tickets" id="" class="form-control">
                <option value="consultation">consultation</option>
              

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
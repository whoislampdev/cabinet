@extends('pharmacie.base')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 style="text-align: center;" class="card-title">Nouveau Medicament</h4>
                <form action="{{route('medicament.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Nom Medicament</label>
                            <input name="nom" type="text" class="form-control" id="validationCustom01" placeholder="Nom Medicament" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Prix</label>
                            <input name="prix" type="number" class="form-control" id="validationCustom01" placeholder="Prix" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Quantite</label>
                            <input name="quantite" type="number" class="form-control" id="validationCustom01" placeholder="Quantite" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="exampleFormControlSelect1">Type de Medicament</label>
                            <select name="type_medicament" class="form-control" id="exampleFormControlSelect1">
                                <option value="">-------------------</option>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->nom}}</option>
                            @endforeach
                            </select>
                        </div>


                        <div class="col-md-12 mb-3">
                            <label>Posologie</label>
                            <textarea name="posologie" id="textarea" class="form-control" maxlength="10000" rows="8" placeholder="Posologie"></textarea>
                        </div>

                    </div>

                    <button style="margin-left:450px;" class="btn btn-primary waves-effect waves-light" type="submit">Ajouter</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection
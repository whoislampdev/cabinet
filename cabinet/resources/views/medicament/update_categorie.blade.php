@extends('pharmacie.base')

@section('main')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 style="text-align: center;" class="card-title">Modifier  {{$tp->nom}}</h4>
                <form action="{{route('categorie.update', $tp)}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <!-- <label for="validationCustom01">First name</label> -->
                            <input name="nom" type="text" class="form-control" id="validationCustom01" placeholder="Nom du Type Medicament"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>

                    <button style="margin-left:450px;" class="btn btn-primary waves-effect waves-light" type="submit">Ajouter</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection
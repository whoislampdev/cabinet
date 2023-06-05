@extends('./pharmacie.base')
@section('main')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Administrateur</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gandiaye</a></li>
                    <li class="breadcrumb-item active">Administrateur</li>
                </ol>
            </div>
            

        </div>
    </div>
</div>
<div class="col-sm-12">
    <form action="{{route('vente.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
        @csrf
        <input name="user_id" type="number" value="{{Auth::user()->id}}" id="validationCustom01" placeholder="Prix" required>
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Quantite</label>
                <input name="quantite" type="number" class="form-control" id="validationCustom01" placeholder="Prix" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <select name="medicament" class="form-control" id="exampleFormControlSelect1">
                    {{-- <option value="">-------------------</option> --}}
                @foreach($medicament as $cat)
                    <option value="{{$cat->id}}">{{$cat->nom}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="exampleFormControlSelect1">Tickets vendu</label>
                <select name="tickets" class="form-control" id="exampleFormControlSelect1">
                    {{-- <option value="">-------------------</option> --}}
                @foreach($all_vente_id as $tickets)
                    <option value="{{$tickets->id}}">{{$tickets->prenom}} {{$tickets->nom}}</option>
                @endforeach
                </select>
            </div>


        <button style="margin-left:450px;" class="btn btn-primary waves-effect waves-light" type="submit">Ajouter</button>
    </form>
</div>


@endsection 
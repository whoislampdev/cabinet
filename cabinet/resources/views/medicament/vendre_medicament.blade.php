@extends('pharmacie.base')
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
        <form id="myForm" method="POST" action="javascript: void(0);">
            <div id="success">

            </div>
            @csrf
            <table id="myTable" class="table table-collapse">
                <tr>
                    <th>Quantite</th>
                    <th>Medicaments</th>
                    <th>Tickets</th>
                    <th></th>
                </tr>
                <tr>
                    
                    <td><input name="quantites[]" type="number" class="form-control row" id="validationCustom01" placeholder="Quantite" required></td>
                    <td> <select name="medicaments[]" class="form-control row" id="exampleFormControlSelect1">
                        {{-- <option value="">-------------------</option> --}}
                    @foreach($medicament as $cat)
                        <option value="{{$cat->id}}">{{$cat->nom}}</option>
                    @endforeach
                    </select></td>
                    <td>   <select name="tickets[]" class="form-control row" id="exampleFormControlSelect1">
                        {{-- <option value="">-------------------</option> --}}
                    @foreach($all_vente_id as $tickets)
                        <option value="{{$tickets->id}}">{{$tickets->prenom}} {{$tickets->nom}}</option>
                    @endforeach
                    </select></td>
                    <td><input name="user_id[]" class="row" type="hidden" value="{{Auth::user()->id}}" id="validationCustom01" placeholder="Prix" required></td>
                </tr>
            </table>
            <button type="button" onclick="addRow()">nouvelle Ligne</button>
            <button type="submit" id="submit">Ajouter </button>
        </form>
    </div>
</div>
<script text="text/js">
  // add row
  function addRow() {
    var table = document.getElementById("myTable");
    var row = table.insertRow();
     var quantityCell = row.insertCell();
    var medCell = row.insertCell();
    var ticketsCell = row.insertCell();
    var personalCell = row.insertCell();
    // quantity
    quantityCell.innerHTML = '<input type="number" class="form-control" placeholder="quantite" name="quantites[]" />';
   // medicament
    // var medCell = row.insertCell();
    var selectElement = document.createElement('select');
    selectElement.name = 'medicaments[]';
    selectElement.className = 'form-control';
    selectElement.id = 'exampleFormControlSelect1';

    @foreach($medicament as $cat)
        var option = document.createElement('option');
        option.value = '{{ $cat->id }}';
        option.text = '{{ $cat->nom }}';
        selectElement.appendChild(option);
    @endforeach
    medCell.appendChild(selectElement);
// tickets
// var medCell = row.insertCell();
    var selectElement = document.createElement('select');
    selectElement.name = 'tickets[]';
    selectElement.className = 'form-control';
    selectElement.id = 'exampleFormControlSelect2';
    @foreach($all_vente_id as $cat)
        var option = document.createElement('option');
        option.value = '{{ $cat->id }}';
        option.text = '{{ $tickets->prenom }} {{ $tickets->nom }}';
        selectElement.appendChild(option);
    @endforeach
    ticketsCell.appendChild(selectElement);
    // user_id
    personalCell = '<input name="user_id[]" type="hidden" value="{{Auth::user()->id}}" id="validationCustom01" placeholder="Prix" required>';
}


    </script>


@endsection 
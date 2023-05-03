@extends('./admin.base')
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
    <form class="d-flex" method="POST" action="javascript:void(0)" name="search" id="search">
        {{-- @csrf --}}
        <select name="mois" id="mois" class="select-form form-control col-sm-3">
            <option value="">mois</option>
            @foreach ($mois as $key =>$m )
                
            {{-- @endforeach($mois as $key =>$m) --}}
            <option value="{{$key}}">{{$m}}</option>

           @endforeach
        </select>
        <select name="annee" id="annee" class="select-form form-control col-sm-3">
            <option value="">mois</option>
            @foreach ($year as $key =>$y )
                
            {{-- @endforeach($mois as $key =>$m) --}}
            <option value="{{$key}}">{{$y}}</option>

           @endforeach
        </select>
        {{-- <select class="form-control me-1" type="search" placeholder="Search" aria-label="Search"> --}}
        <input class="btn btn-primary search" id="submit" type="submit" value="Search">
      </form>
</div>
<div class="container" id="rapport_by_mois">

</div>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function($){
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        console.log('start........................................................LAmp');
    $("#submit").on('click', function() {
   
    var mois = $('#mois').val();
    var annee = $('#annee').val();
    // var end_date = $('#kt_date_end').val();
    console.log(annee);

    $.ajax({
        type: 'POST',
        url: "{{url('admincaisse')}}",
        data: {"mois":mois,'annee':annee},
        dataType: 'JSON',
        success: function (results) {

            content='<table id="datatable-buttons" class="table table-striped dt-responsive nowrap" style="margin-top: 13px !important">';
            content +='<thead>\
              <tr>\
               <th>Nom</th>\
                <th>Prenom</th>\
                 <th>Type de  Ticket</th>\
                   <th>Age </th>\
                    <th>Date achat</th>\
                      <th>Actions</th>\
                        </tr>\
                         </thead>';
            content += '<tbody>';
            
            results.forEach(function(item,index){
                content += '<tr>';
                content += '<td>'+item.nom+'</td>';
                content += '<td>'+item.prenom+'</td>';
                content += '<td>'+item.acte+'</td>';
                content += '<td>'+item.age+'</td>';
                content += '<td>'+item.date_vente+'</td>';
                content += '<td>'+item.telephone+'</td>';
                // content += '<td>'+item.exit_at+'</td>';
                content += '</tr>';
                
            });
            content += '</tbody>\
                </table>';
            // window.location.reload();
            document.getElementById('rapport_by_mois').innerHTML = content;
          

            // document.getElementById('total_enterance').innerHTML = total_enterance;
            // document.getElementById('total_ticket').innerHTML = total_ticket;
            // document.getElementById('total_subscribe').innerHTML = total_subscribe;
            // document.getElementById('total_prepaid').innerHTML = total_prepaid;


          

            
        }
    });
    });
});

</script>
@endsection
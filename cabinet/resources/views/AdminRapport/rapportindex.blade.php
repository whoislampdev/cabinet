@extends('./admin.base')
@section('main')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Administrateur</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">SEMIG</a></li>
                    <li class="breadcrumb-item active">Administrateur</li>
                </ol>
            </div>
            

        </div>
    </div>
</div>
<div class="col-sm-12">
    <form class="d-flex" method="POST" action="javascript:void(0)" name="search" id="search">
        {{-- @csrf --}}
        <select name="user_id" id="user_id" class="select-form form-control col-sm-3">
            <option value="">Agents</option>
            @foreach ($all_users as $key =>$m )
                
            {{-- @endforeach($mois as $key =>$m) --}}
            <option value="{{$m->id}}">{{$m->name}}</option>

           @endforeach
        </select>
        <select name="jour" id="jour" class="select-form form-control col-sm-3">
            <option value="">Jour</option>
            @foreach ($jour as $key =>$y )
                
            {{-- @endforeach($mois as $key =>$m) --}}
            <option value="{{$key}}">{{$y}}</option>

           @endforeach
        </select>
        <select name="mois" id="mois" class="select-form form-control col-sm-3">
            <option value="">mois</option>
            @foreach ($mois as $key =>$m )
                
            {{-- @endforeach($mois as $key =>$m) --}}
            <option value="{{$key}}">{{$m}}</option>

           @endforeach
        </select>
       
        {{-- <select class="form-control me-1" type="search" placeholder="Search" aria-label="Search"> --}}
        <input class="btn btn-primary search col-sm-2" id="submit" type="submit" value="Search">
      </form>
</div>
<div class="row " id="rapport_by_mois">

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
    var jour = $('#jour').val();
    var user_id = $('#user_id').val();
    // var end_date = $('#kt_date_end').val();
    console.log(mois);
    console.log(jour);

  
    $.ajax({
        type: 'POST',
        url: "{{url('admincaisse-rapport')}}",
        data: {"mois":mois,'jour':jour,user_id:'user_id'},
        dataType: 'JSON',
        success: function (results) {
          console.log(results);
          
            content ='<br/>\
             <div class="col-md-8 col-xl-6">\
                        <div class="card">\
                            <div class="card-body">\
                                <div class="mb-8">\
                                    <span class="badge badge-soft-primary float-right">all</span>\
                                    <h5 class="card-title mb-0"> Vente Journalier Total </h5>\
                                </div></br>';
          
            
            // results.forEach(function(item,index){
                 

                content += '<div class="row d-flex align-items-center mb-4">\
                                    <div class="col-8">';
                content += '<h2 class="d-flex align-items-center mb-0">'+results+'F CFA</h2>';
                content+='</div></div>';
              
                
            
            
            // window.location.reload();
            document.getElementById('rapport_by_mois').innerHTML = content;
          
            // window.location.reload();
            document.getElementById('rapport_by_mois').innerHTML = content;
          

            // document.getElementById('total_enterance').innerHTML = total_enterance;
            // document.getElementById('total_ticket').innerHTML = total_ticket;
            // document.getElementById('total_subscribe').innerHTML = total_subscribe;
            // document.getElementById('total_prepaid').innerHTML = total_prepaid;


          

            
        }
    }
    )});
    
});

</script>
@endsection
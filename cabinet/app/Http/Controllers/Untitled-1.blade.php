{{-- <script type="text/javascript">
    $(document).ready(function($){
    $('body').on('click','#search', function (event) {
    console.log('start........................................................LAmp');
    // var date_vente = $('#date_vente').val();
    // var end_date = $('#kt_date_end').val();

    $.ajax({
        type: 'POST',
        url: "{{url('/filter')}}",
        data: {"date_vente":date_vente,_token: CSRF_TOKEN},
        dataType: 'JSON',
        success: function (results) {

            content = '<table id="report_datatable" class="table table-separate table-head-custom table-checkable" style="margin-top: 13px !important">';
            '
            <thead>\
              <tr>\
               <th>Nom</th>\
                <th>Prenom</th>\
                 <th>Type de  Ticket</th>\
                   <th>Age </th>\
                    <th>Date achat</th>\
                      <th>Actions</th>\
                        </tr>\
                         </thead>';
            '<tbody>';
            
        
                

               <tr>';
               <td>'+item.nom+'</td>';
               <td>'+item.prenom+'</td>';
               <td>'+item.acte+'</td>';
               <td>'+item.age+'</td>';
               <td>'+item.date_vente+'</td>';
               <td>'+item.telephone+'</td>';
                //<td>'+item.exit_at+'</td>';
               </tr>';
                
            });
           </tbody>\
                </table>';
            window.location.reload();
            document.getElementById('rapport_by_mois').innerHTML = content;
          

            // document.getElementById('total_enterance').innerHTML = total_enterance;
            // document.getElementById('total_ticket').innerHTML = total_ticket;
            // document.getElementById('total_subscribe').innerHTML = total_subscribe;
            // document.getElementById('total_prepaid').innerHTML = total_prepaid;


            // var table = $('#report_datatable');

            // begin first table
            // table.DataTable({
            //     responsive: true,
            //     "searching": true,
            //     "bLengthChange": false,
            //     "bInfo": false,
            //     "bFilter": false,
            //     pageLength: 10,
            //     language: {
            //         "sLoadingRecords": "Yükleniyor...",
            //         "sProcessing":     "İşleniyor...",
            //         "sSearch":         "Ara:",
            //         "sZeroRecords":    "Eşleşen kayıt bulunamadı",
            //         "oPaginate": {
            //                 "sFirst":    "İlk",
            //                 "sLast":     "Son",
            //                 "sNext":     "Sonraki",
            //                 "sPrevious": "Önceki"
            //         }
            //     },
            //     search: {
            //         "caseInsensitive": true
            //     },
            //     dom: `<'row'<'col-sm-6 text-left'f><'col-sm-6 text-right'B>>
            //     <'row'<'col-sm-12'tr>>
            //     <'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            //     buttons: [
            //        copy',csv',excel',pdf',print'
            //     ],
            //     fnInitComplete: function() {
            //         $("div.dataTables_filter input").focus();
            //     },
            // });

            
        }
    });
    });
});

</script> --}}
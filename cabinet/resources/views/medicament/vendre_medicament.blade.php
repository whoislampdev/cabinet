@extends('./pharmacie.base')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="form-group">
                <form name="add_name" id="add_name">
                    <table class="table table-bordered table-hover" id="dynamic_field">
                        <tr>

                            <td>

                                <label for="exampleFormControlSelect1">Medicament</label>
                                <select name="name[]" class="form-control name_list" id="exampleFormControlSelect1">
                                    <option value="">-------------------</option>
                                    @foreach($med as $meds)
                                    <option value="{{$meds->id}}">{{$meds->nom}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <label for="exampleFormControlSelect1">Quantite</label>

                                <input type="number" name="amount[]" value="700" placeholder="Entrez la Quantite" class="form-control total_amount" />
                            </td>
                            <br>
                            <br>
                            <td>
                            <br>
                            <button type="button" name="add" id="add" class="btn btn-primary">+</button><br>
                            </td><br>
                        </tr>
                    </table>
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="Vendre">
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
<script>
    $(document).ready(function() {

        var i = 1;
        var length;
        //var addamount = 0;
        var addamount = 700;

        $("#add").click(function() {



            addamount += 700;
            console.log('amount: ' + addamount);
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list"/></td><td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td>	<td><input type="text" name="amount[]" value="700" placeholder="Enter your Money" class="form-control total_amount"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            addamount -= 700;
            console.log('amount: ' + addamount);



            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });



        $("#submit").on('click', function(event) {
            var formdata = $("#add_name").serialize();
            console.log(formdata);

            event.preventDefault()

            $.ajax({
                url: "action.php",
                type: "POST",
                data: formdata,
                cache: false,
                success: function(result) {
                    alert(result);
                    $("#add_name")[0].reset();
                }
            });

        });
    });
</script>

@endsection
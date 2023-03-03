@extends('./pharmacie.base')

@section('main')

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 style="text-align: center;" class="card-title">LISTE DES TYPES DE MEDICAMENTS</h4>


                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach($type as $tp)
                                    
                                        <tbody>
                                            <tr>
                                                <td>{{$tp->nom}}</td>
                                                <td>{{$tp->created_at->format('d / y / m')}}</td>
                                                <td> <div class="col-6">
                                                    <div class="dropdown">
                                                        <button class="btn btn-info dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Modifier</a>
                                                            <a class="dropdown-item" href="#">Voir</a>
                                                            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                                        </div>
                                                    </div>
                                                </div></td>
                                            </tr>
                     
                                        </tbody>

                                        @endforeach
                                    </table>
                                    
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>

                    @endsection
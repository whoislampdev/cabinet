
@extends('./caisse.base')

@section('main')

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 style="text-align: center;" class="card-title">LISTE DES VENTES</h4>
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Libelle</th>
                                                <th>Montant</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        @foreach($liste_charge as $charge)
                                        <tbody>
                                            <tr>
                                                <td>{{$charge->libelle}}</td>
                                                <td>{{$charge->montant}}</td>
                                                <td> <div class="col-6">
                                                    <div class="dropdown">
                                                        <button class="btn btn-info dropdown-toggle waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Modifier</a>
                                                            <a class="dropdown-item" href="#">Voir</a>
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
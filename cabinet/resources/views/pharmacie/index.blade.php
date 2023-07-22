@extends('pharmacie.base')

@section('main')

<div class="row">
    
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">All</span>
                                    <h5 class="card-title mb-0">Medicaments</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{$count_medoc}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">All</span>
                                    <h5 class="card-title mb-0">Categories</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{$count_Tymedocs}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-6">
                                    <span class="badge badge-soft-primary float-right">Journalier</span>
                                    <h5 class="card-title mb-0">Medicament Vendu</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{$count_Ventmedocs}}
                                        </h2>
                                    </div>
                                    <!-- <div class="col-4 text-right">
                                        <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                                    </div> -->
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col-->
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-6">
                                    <span class="badge badge-soft-primary float-right">Journalier</span>
                                    <h5 class="card-title mb-0">Total Vendu</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            {{$Montant}}
                                        </h2>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                    </div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div>
                        <!--end card-->
                    </div> <!-- end col-->
                    

<!-- end col-->
                </div>
                <div class="row">
                    <ul class="list-group">
                        @forelse ($medi as $med)
                            @if($med->quantite_disponible < $med->quantite_alerte)
                            <li class="list-group-item">{{ $med->nom}} en rupture  et il reste {{ $med->quantite_disponible}}</li>
                            @endif
                        @empty
                            tout les produits sont en stock
                    @endforelse
                       
                    </ul>
                </div>
@endsection
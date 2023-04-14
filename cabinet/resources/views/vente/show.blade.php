
@extends('./caisse.base')

@section('main')

<div class="row">
    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <span class="badge badge-soft-primary float-right">journalier</span>
                    <h5 class="card-title mb-0">Vente par cassier</h5>
                </div>
                <div class="row d-flex align-items-center mb-4">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                           {{$Montant_total}} F CFA
                        </h2>
                    </div>
                    {{-- <div class="col-4 text-right">
                        <span class="text-muted">12.5% <i
                                class="mdi mdi-arrow-up text-success"></i></span>
                    </div> --}}
                </div>

                <div class="progress shadow-sm" style="height: 5px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                    </div>
                </div>
            </div>
            <!--end card body-->
        </div><!-- end card-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <span class="badge badge-soft-primary float-right">total</span>
                    <h5 class="card-title mb-0"> Total vente</h5>
                </div>
                <div class="row d-flex align-items-center mb-4">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            <span>{{$cout_vente}}</span>
                        </h2>
                    </div>
                    {{-- <div class="col-4 text-right">
                        <span class="text-muted">18.71% <i
                                class="mdi mdi-arrow-down text-danger"></i></span>
                    </div> --}}
                </div>

                <div class="progress shadow-sm" style="height: 5px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                    </div>
                </div>
            </div>
            <!--end card body-->
        </div><!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row-->
@endsection
<<<<<<< HEAD
@extends('admin.base')
=======
@extends('./admin.base')
>>>>>>> 36947b8024c0702a4b59c7a743595f153a2da8b0

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


                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">Daily</span>
                                    <h5 class="card-title mb-0">Nombres de Patients</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            125
                                        </h2>
                                    </div>
                                    <!-- <div class="col-4 text-right">
                                        <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                                    </div> -->
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
                                    <span class="badge badge-soft-primary float-right">Per Week</span>
                                    <h5 class="card-title mb-0">Stock Medicament</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            269
                                        </h2>
                                    </div>
                                    <!-- <div class="col-4 text-right">
                                        <span class="text-muted">18.7% <i class="mdi mdi-arrow-down text-danger"></i></span>
                                    </div> -->
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
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">Per Month</span>
                                    <h5 class="card-title mb-0">Ticket Vendu</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            369
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
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">All Time</span>
                                    <h5 class="card-title mb-0">Nombre utilisateur</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                           6
                                        </h2>
                                    </div>
                                    <!-- <div class="col-4 text-right">
                                        <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                                    </div> -->
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->
                </div>


@endsection
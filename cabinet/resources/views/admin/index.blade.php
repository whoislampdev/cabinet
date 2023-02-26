@extends('./admin.base')

@section('main')

<div id="layout-wrapper">
    <div class="header-border"></div>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

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
                                    <h5 class="card-title mb-0">Cost per Unit</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            $17.21
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-success"></i></span>
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
                                    <span class="badge badge-soft-primary float-right">Per Week</span>
                                    <h5 class="card-title mb-0">Market Revenue</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            $1875.54
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">18.71% <i class="mdi mdi-arrow-down text-danger"></i></span>
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
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">Per Month</span>
                                    <h5 class="card-title mb-0">Expenses</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            $784.62
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
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

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <span class="badge badge-soft-primary float-right">All Time</span>
                                    <h5 class="card-title mb-0">Daily Visits</h5>
                                </div>
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            1,15,187
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                                    </div>
                                </div>

                                <div class="progress shadow-sm" style="height: 5px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                </div>
                            </div>
                            <!--end card body-->
                        </div><!-- end card-->
                    </div> <!-- end col-->
                </div>

            </div>
        </div>
    </div>

</div>
@endsection
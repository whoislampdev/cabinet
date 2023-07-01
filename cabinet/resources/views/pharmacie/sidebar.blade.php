<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
        <a href="{{route('pharmacie')}}" class="logo">
            <i class="mdi mdi-album"></i>
            <span>
                {{-- CMYFN --}}
                <img src="../assets\images\media\logo\log.png"  width="150px" alt="" >
            </span>
        </a>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{url('pharmacie')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
            </li>

            <li>
                <a href="{{route('medicament.index')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Medicament</span></a>
            </li>

            <li>
                <a href="{{route('categorie.index')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Categorie</span></a>
            </li>
            <li>
                <a href="{{route('vente.create')}}" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Vente</span></a>
            </li>



        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
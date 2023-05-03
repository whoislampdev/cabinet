<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
        <a href="index.html" class="logo">
            <i class="mdi mdi-album"></i>
            <span>
                {{-- C M Y F N --}}
                <img src="assets\images\media\logo\log.png"  width="150px" alt="" >
             </span>
        </a>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>
            <li>
                <a href="/admin" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
            </li>
            <li>
                <a href="#" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Gestion utilisateur</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('personnals.index')}}">Add Personnel</a></li>
                    <li><a href="{{url('admin-user')}}">Rapport Caissiere</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Gestion Caissiere</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{url('admincaisse')}}">Rapport Journalier</a></li>
                    <li><a href="{{url('admincaisse-rapport')}}"> Details Rapport Journalier</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Gestion Pharmacie</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="">Rapport Journalier</a></li>
                    <li><a href="">Details Rapport Journalier</a></li>
                     {{-- <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a>
                    <li><a href="ui-embeds.html">Embeds</a>
                    <li><a href="ui-general.html">General</a></li>
                    <li><a href="ui-grid.html">Grid</a></li> --}}
                    
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
        <a href="{{route('caisse')}}" class="logo">
            {{-- <i class="mdi mdi-album"></i> --}}
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

            {{-- <li>
                <a href="index.html" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
            </li> --}}

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Caisse</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    {{-- <li></li> --}}
                    <li><a href="{{route('Vente.index')}}">Ticket Vendu</a></li>
                    <li><a href="{{route('Details.index')}}">Total vente journalier</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Charge</span></a>
                <ul class="sub-menu" aria-expanded="false">
                   
                    <li><a href="{{route('charges.index')}}">Liste Charge</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-home-analytics"></i><span>Gestion des Tickets</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('acte.index')}}">Liste Tickets</a></li>
                   
                    {{-- <li><a href="charts-google.html">Google</a></li>
                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                    <li><a href="charts-knob.html">Jquery Knob</a></li> --}}
                </ul>
            </li>

   

        

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
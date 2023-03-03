<div class="vertical-menu">

<div data-simplebar class="h-100">

    <div class="navbar-brand-box">
        <a href="index.html" class="logo">
            <i class="mdi mdi-album"></i>
            <span>
               C M Y F N
            </span>
        </a>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="index.html" class="waves-effect"><i class="mdi mdi-home-analytics"></i><span
                        class="badge badge-pill badge-primary float-right">7</span><span>Dashboard</span></a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-diamond-stone"></i><span>Caisse</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('caisse')}}">Vendre Ticket</a></li>
                    <li><a href="{{route('acte.create')}}">Ticket Vendu</a></li>
                    <li><a href="">Total vente journalier</a></li>
                    {{-- <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a>
                    <li><a href="ui-embeds.html">Embeds</a>
                    <li><a href="ui-general.html">General</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-media-objects.html">Media Objects</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                    <li><a href="ui-tabs.html">Tabs</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-toasts.html">Toasts</a></li>
                    <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                    <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                    <li><a href="ui-spinners.html">Spinners</a></li>
                    <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li> --}}
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-table-merge-cells"></i><span>Charge</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Add Charge</a></li>
                    <li><a href="tables-datatables.html">Liste Charge</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-poll"></i><span>Gestion des Tickets</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('acte.index')}}">Liste Tickets</a></li>
                    <li><a href="{{route('acte.create')}}">Nouveau  Tickets</a></li>
                    {{-- <li><a href="charts-google.html">Google</a></li>
                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                    <li><a href="charts-knob.html">Jquery Knob</a></li> --}}
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect"><i
                        class="mdi mdi-format-list-bulleted-type"></i><span
                        class="badge badge-pill badge-danger float-right">6</span><span>Forms</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="forms-elements.html">Elements</a></li>
                    {{-- <li><a href="forms-plugins.html">Plugins</a></li>
                    <li><a href="forms-validation.html">Validation</a></li>
                    <li><a href="forms-mask.html">Masks</a></li>
                    <li><a href="forms-quilljs.html">Quilljs</a></li>
                    <li><a href="forms-uploads.html">File Uploads</a></li> --}}
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-black-mesa"></i><span>Icons</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                    {{-- <li><a href="icons-fontawesome.html">Font awesome</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-feather.html">Feather Icons</a></li> --}}
                </ul>
            </li>

            <li class="menu-title">More</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-format-page-break"></i><span>Pages</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    {{-- <li><a href="pages-starter.html">Starter Page</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li> --}}
                </ul>
            </li>

            <li><a href="calendar.html" class=" waves-effect"><i
                        class="mdi mdi-calendar-range-outline"></i><span>Calendar</span></a></li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-map-marker-radius"></i><span>Maps</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                        class="mdi mdi-share-variant"></i><span>Multi Level</span></a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                    {{-- <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                            <li><a href="javascript: void(0);">Level 2.2</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
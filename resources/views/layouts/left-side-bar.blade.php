{{-- This is the left side bar page --}}
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-info">Accounting System</div>
                <hr class="bg-info">
                <a class="nav-link  {{ request()->routeIs('home') ? 'active' : null }}" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                <!-- Start of Account Books -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    Account Books
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">General Ledger</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Ledgers</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Trial Balance</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Reconcilliation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Financial Statements</a>
                    </nav>
                </div>
                 <!-- End of Account Books -->
                 
                <!-- start of Account Payables -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#payables" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                     Payables
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="payables" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('suppliers.index')}}">Suppliers</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Purchase Orders</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Vendor Payments</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Expenses </a>
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Aging Analysis</a> --}}
                        {{-- <a class="nav-link" href="layout-sidenav-light.html">Reporting</a> --}}

                    </nav>
                </div>
                 <!-- ./ end of Account payables -->


                <!-- start of Account Receivables -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#receivables" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                     Receivables
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="receivables" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Customers</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Invoices</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Customer Payments</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Credit Payments </a>
                        <a class="nav-link" href="layout-sidenav-light.html">Reporting Analysis</a>

                    </nav>
                </div>
                 <!-- end of account receivables -->


                 <!-- start of Inventories -->
                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#inventory" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                     Inventory
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="inventory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Stocks</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Cost Tracking</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Stock Movement</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Inventory Setting </a>
                        <a class="nav-link" href="layout-sidenav-light.html">Reporting Analysis</a>

                    </nav>
                </div>
                 <!-- ./end of Inventory -->

                 <!-- Start of Chart of Accounts -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#accountchart" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Chart of Accounts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="accountchart" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('financial_years.index') }}">Financial Years</a>
                        <a class="nav-link" href="{{ route('accounts.index') }}">Accounts</a>
                        <a class="nav-link" href="{{ route('account-types.index') }}">Account Types</a>
                        <a class="nav-link" href="{{ route('accounts-process.index') }}">Account Process</a>
                    </nav>
                </div>
                 <!-- ./ End of Chart of Accounts -->

                 <!-- start of Tax Management -->
                 <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#tax" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
                    Tax Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="tax" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">All Taxes</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Tax Payments</a>
                        <a class="nav-link" href="layout-sidenav-light.html"> Tax Compliance</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Tax Reporting</a>
                    </nav>
                </div>
                <!-- ./ end of Tax Management -->

                <!-- start of setting -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Settings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="setting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Company Details</a>
                        <a class="nav-link" href="layout-static.html">Departments</a>
                        <a class="nav-link" href="layout-static.html">User Management</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Access Control</a>
                        <a class="nav-link" href="layout-sidenav-light.html"> Audit Trails</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Password Recovery</a>
                    </nav>
                </div>

            <!-- end of setting -->

            <hr class="bg-info">
          
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
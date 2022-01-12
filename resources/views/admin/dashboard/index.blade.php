@extends('admin.main')

@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> {{ __('messages.dashboard') }} </h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Registered User -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            {{ __('messages.REGISTERED USER') }} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1025</div>
                    </div>
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M58.48,6.88c-9.50031,0 -17.2,7.69969 -17.2,17.2c0,9.50031 7.69969,17.2 17.2,17.2c9.50031,0 17.2,-7.69969 17.2,-17.2c0,-9.50031 -7.69969,-17.2 -17.2,-17.2zM112.875,6.88c-9.50031,0 -17.2,7.69969 -17.2,17.2c0,9.50031 7.69969,17.2 17.2,17.2c9.50031,0 17.2,-7.69969 17.2,-17.2c0,-9.50031 -7.69969,-17.2 -17.2,-17.2zM58.48,44.72c-3.82969,0 -7.37719,0.88688 -10.535,2.4725c6.45,5.03906 10.6425,12.91344 10.6425,21.715c0,8.61344 -3.99094,16.34 -10.2125,21.3925c5.01219,2.60688 9.39281,6.22156 12.7925,10.75c-1.63937,-3.52062 -2.58,-7.37719 -2.58,-11.5025c0,-13.66594 10.03781,-25.07437 23.1125,-27.1975c-2.76812,-10.23937 -12.02656,-17.63 -23.22,-17.63zM112.875,44.72c-11.13969,0 -20.41156,7.33688 -23.22,17.5225c13.47781,1.77375 23.9725,13.34344 23.9725,27.305c0,3.85656 -0.81969,7.525 -2.2575,10.8575c3.35938,-4.24625 7.56531,-7.74 12.3625,-10.2125c-6.18125,-5.0525 -10.105,-12.69844 -10.105,-21.285c0,-8.64031 3.96406,-16.34 10.2125,-21.3925c-3.29219,-1.76031 -6.93375,-2.795 -10.965,-2.795zM31.0675,48.2675c-11.395,0 -20.64,9.245 -20.64,20.64c0,11.395 9.245,20.64 20.64,20.64c11.395,0 20.64,-9.245 20.64,-20.64c0,-11.395 -9.245,-20.64 -20.64,-20.64zM141.1475,48.2675c-11.395,0 -20.64,9.245 -20.64,20.64c0,11.395 9.245,20.64 20.64,20.64c11.395,0 20.64,-9.245 20.64,-20.64c0,-11.395 -9.245,-20.64 -20.64,-20.64zM86.1075,68.9075c-11.395,0 -20.64,9.245 -20.64,20.64c0,11.395 9.245,20.64 20.64,20.64c11.395,0 20.64,-9.245 20.64,-20.64c0,-11.395 -9.245,-20.64 -20.64,-20.64zM30.96,92.88c-17.06562,0 -30.96,13.88094 -30.96,30.96v12.04c0,1.075 0.52406,2.15 1.3975,2.795c0.79281,0.60469 8.385,5.805 29.5625,5.805c7.33688,0 13.04781,-0.65844 17.415,-1.505c0.44344,-10.57531 5.17344,-20.04875 12.5775,-26.66c-3.35937,-13.46437 -15.50687,-23.435 -29.9925,-23.435zM141.04,92.88c-14.43187,0 -26.57937,9.93031 -29.9925,23.3275c7.51156,6.62469 12.3625,16.20563 12.7925,26.875c4.34031,0.83313 9.97063,1.3975 17.2,1.3975c21.1775,0 28.76969,-5.20031 29.5625,-5.805c0.87344,-0.645 1.3975,-1.70656 1.3975,-2.795v-12.04c0,-17.07906 -13.88094,-30.96 -30.96,-30.96zM86.1075,113.6275c-17.06562,0 -30.96,13.88094 -30.96,30.96v12.04c0,1.08844 0.52406,2.0425 1.3975,2.6875c0.79281,0.60469 8.385,5.9125 29.5625,5.9125c21.1775,0 28.76969,-5.30781 29.5625,-5.9125c0.87344,-0.645 1.3975,-1.6125 1.3975,-2.6875v-12.04c0,-17.07906 -13.88094,-30.96 -30.96,-30.96z"></path></g></g></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daily Visitor -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            {{ __('messages.DAILY VISITOR') }} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">125</div>
                    </div>
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M31.02047,0c-0.92275,-0.01613 -1.81329,0.33915 -2.47153,0.98603c-0.65824,0.64687 -1.02899,1.53108 -1.02894,2.45397v147.92c-0.00017,1.16465 0.5889,2.25032 1.5654,2.88504c0.97649,0.63472 2.20782,0.73231 3.2721,0.25934l30.47625,-13.545c1.50777,-0.41542 2.54562,-1.79554 2.52625,-3.35937v-116.96h68.8v116.96c-0.01754,1.24059 0.63425,2.39452 1.7058,3.01993c1.07155,0.62541 2.39684,0.62541 3.46839,0c1.07155,-0.62541 1.72335,-1.77935 1.7058,-3.01993v-120.4c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44h-74.94765l-30.29485,-13.46437c-0.42137,-0.18714 -0.87605,-0.28767 -1.33703,-0.29562zM99.84063,41.28c-7.54048,0 -13.64578,6.16104 -13.64578,13.76c0,7.59896 6.10874,13.76 13.64578,13.76c7.53704,0 13.6525,-6.16104 13.6525,-13.76c0,-7.59896 -6.11546,-13.76 -13.6525,-13.76zM37.84,72.24c1.89888,0 3.44,2.31168 3.44,5.16c0,2.84832 -1.54112,5.16 -3.44,5.16c-1.89888,0 -3.44,-2.31168 -3.44,-5.16c0,-2.84832 1.54112,-5.16 3.44,-5.16zM90.54187,74.06078c-8.7376,3.612 -14.86187,12.21442 -14.86187,22.25922v15.78906c0,0.8944 0.37518,1.78611 0.99437,2.40531l5.12641,5.12641c0.4816,0.4816 0.8299,1.1395 0.9675,1.8275l6.15437,33.94985c0.3096,1.6168 1.72161,2.82187 3.37281,2.82187h14.92906c1.6512,0 3.06321,-1.20508 3.37281,-2.82187l6.15437,-33.94985c0.1376,-0.688 0.4859,-1.3459 0.9675,-1.8275l5.12641,-5.12641c0.6192,-0.6192 0.99437,-1.51091 0.99437,-2.40531v-15.78906c0,-10.0448 -6.12428,-18.64722 -14.86187,-22.25922l-9.21813,15.37922zM75.68,147.92c-1.4104,0 -2.68213,0.86295 -3.19813,2.17015l-6.88,17.2c-0.4128,1.0664 -0.27654,2.26933 0.34266,3.19813c0.6536,0.9288 1.72027,1.51172 2.85547,1.51172h61.92c1.1352,0 2.20187,-0.58292 2.85547,-1.51172c0.6192,-0.9288 0.75545,-2.13173 0.34266,-3.19813l-6.88,-17.2c-0.516,-1.3072 -1.78773,-2.17015 -3.19813,-2.17015h-4.88453l-1.58562,8.73437c-0.8944,4.8848 -5.15731,8.46563 -10.14531,8.46563h-14.92906c-4.988,0 -9.25091,-3.58082 -10.14531,-8.46563l-1.58562,-8.73437z"></path></g></g></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Love Reaction -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            {{ __('messages.LOVE REACTION') }} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">255</div>
                    </div>
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M86,162.71469l-2.20375,-1.8275c-4.17906,-3.49375 -9.83625,-7.28312 -16.39375,-11.66375c-25.54469,-17.10594 -60.5225,-40.51406 -60.5225,-80.42344c0,-24.65781 20.06219,-44.72 44.72,-44.72c13.39719,0 25.94781,5.96625 34.4,16.16531c8.45219,-10.19906 21.00281,-16.16531 34.4,-16.16531c24.65781,0 44.72,20.06219 44.72,44.72c0,39.90938 -34.97781,63.3175 -60.5225,80.42344c-6.5575,4.38063 -12.21469,8.17 -16.39375,11.66375z"></path></g></g></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Post -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-3">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            {{ __('messages.post') }} </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">345</div>
                    </div>
                    <div class="col-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M27.52,6.88c-1.89469,0 -3.44,1.54531 -3.44,3.44v151.36c0,1.90813 1.54531,3.44 3.44,3.44h89.44c0.91375,0 1.8275,-0.3225 2.4725,-0.9675l27.52,-27.52c0.645,-0.645 0.9675,-1.55875 0.9675,-2.4725v-123.84c0,-1.89469 -1.53187,-3.44 -3.44,-3.44zM86,20.64c1.89469,0 3.44,1.54531 3.44,3.44c0,1.89469 -1.54531,3.44 -3.44,3.44c-1.89469,0 -3.44,-1.54531 -3.44,-3.44c0,-1.89469 1.54531,-3.44 3.44,-3.44zM41.28,34.4h89.44v96.32h-13.76c-0.1075,0 -0.215,0 -0.3225,0c-1.77375,0.16125 -3.13094,1.65281 -3.1175,3.44v13.76h-72.24zM120.4,137.6h15.8025l-15.8025,15.8025z"></path></g></g></svg>                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> {{ __('messages.Daily Visitor Overview') }} </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"> {{ __('messages.post statistics') }} </h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> {{ __('messages.ML') }} 
                    </span>
                    <br>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> {{ __('messages.DL') }}
                    </span>
                    <br>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> {{ __('messages.CV') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

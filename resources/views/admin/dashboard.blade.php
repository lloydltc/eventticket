@extends('layouts.admin')
@section('content')
<div class="page-body">
    <div class="row">
        <!-- task, page, download counter  start -->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-yellow update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">$30200</h4>
                            <h6 class="text-white m-b-0">All Earnings</h6>
                        </div>
                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="update-chart-1" height="75" style="display: block; height: 50px; width: 78px;" width="117"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-green update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">290+</h4>
                            <h6 class="text-white m-b-0">Page Views</h6>
                        </div>
                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="update-chart-2" height="75" width="117" style="display: block; height: 50px; width: 78px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-c-pink update-card">
                <div class="card-block">
                    <div class="row align-items-end">
                        <div class="col-8">
                            <h4 class="text-white">145</h4>
                            <h6 class="text-white m-b-0">Task Completed</h6>
                        </div>
                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <canvas id="update-chart-3" height="75" width="117" style="display: block; height: 50px; width: 78px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                </div>
            </div>
        </div>
       
        <!-- task, page, download counter  end -->



        <!--  sale analytics end -->

        <div class="col-xl-8 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Application Sales</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i></li>
                            <li><i class="feather icon-trash-2 close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover  table-borderless">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        Application</th>
                                    <th>Sales</th>
                                    <th>Change</th>
                                    <th>Avg Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <h6>Able Pro</h6>
                                            <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                        </div>
                                    </td>
                                    <td>16,300</td>
                                    <td><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas id="app-sale1" height="96" width="192" style="display: block; height: 64px; width: 128px;"></canvas></td>
                                    <td>$53</td>
                                    <td class="text-c-blue">$15,652</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <h6>Photoshop</h6>
                                            <p class="text-muted m-b-0">Design Software</p>
                                        </div>
                                    </td>
                                    <td>26,421</td>
                                    <td><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas id="app-sale2" height="96" width="192" style="display: block; height: 64px; width: 128px;"></canvas></td>
                                    <td>$35</td>
                                    <td class="text-c-blue">$18,785</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <h6>Guruable</h6>
                                            <p class="text-muted m-b-0">Best Admin Template</p>
                                        </div>
                                    </td>
                                    <td>8,265</td>
                                    <td><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas id="app-sale3" height="96" width="192" style="display: block; height: 64px; width: 128px;"></canvas></td>
                                    <td>$98</td>
                                    <td class="text-c-blue">$9,652</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <div class="checkbox-fade fade-in-primary">
                                                <label class="check-task">
                                                    <input type="checkbox" value="">
                                                    <span class="cr">
                                                        <i class="cr-icon feather icon-check txt-default"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <h6>Flatable</h6>
                                            <p class="text-muted m-b-0">Admin App</p>
                                        </div>
                                    </td>
                                    <td>10,652</td>
                                    <td><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe><canvas id="app-sale4" height="96" width="192" style="display: block; height: 64px; width: 128px;"></canvas></td>
                                    <td>$20</td>
                                    <td class="text-c-blue">$7,856</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
</div>
@endsection

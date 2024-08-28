<div>


    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Tickets for {{$event->name}}</h4>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Page-header end -->

                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Product list card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Ticket List</h5>
                                        <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"  onclick="window.location.href = '{{route('createTicket', $event->id)}}'"> <i class="icofont icofont-plus m-r-5"></i> Add Ticket
                </button>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div class="table-content">
                                                <div class="project-table">
                                                    <div id="e-product-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-xs-12 col-sm-12 col-sm-12 col-md-6"></div><div class="col-xs-12 col-sm-12 col-md-6"></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="e-product-list" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" style="width: 655px;">
                                                        <thead>
                                                            <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 85px;">Tickets</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 438px;">EventName</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;">Amount</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;">Stock</th>
                                                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px; display: none;">Action</th></tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($tickets as $ticket )

                                                        <tr role="row" class="odd">
                                                                <td class="pro-list-img" tabindex="0">
                                                                    {{$ticket->tickets}}

                                                                </td>
                                                                <td class="pro-name">
                                                                    <h6>{{$ticket->event->name}}</h6>
                                                                    {{-- <span>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</span> --}}
                                                                </td>
                                                                <td>${{$ticket->price}}</td>
                                                                <td style="display: none;">
                                                                    @if ($ticket->tickets >0)
                                                                    <label class="text-succes">In Stock</label>
                                                                    @else
                                                                    <label class="text-danger">Out Of Stock</label>

                                                                    @endif

                                                                </td>
                                                                <td class="action-icon" style="display: none;">
                                                                    <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icofont icofont-ui-edit"></i></a>
                                                                    <a href="#!" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add tickets"><i class="icofont icofont-ui-add"></i></a>

                                                                    <a href="#!" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="icofont icofont-delete-alt"></i></a>
                                                                </td>
                                                            </tr>

                                                            @endforeach
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product list card end -->
                            </div>
                        </div>
                        <!-- Add Contact Start Model start-->

                        <!-- Add Contact Ends Model end-->
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
    </div>

</div>















@extends('layouts.client')
@section('content')
    <div id="all">
        @include('layouts.client-header')








            <div id="content" class="site-content">
				<!-- Breadcrumb -->


				<div class="container">
					<div class="page-checkout">
						<div class="row">
							<div class="checkout-left col-lg-12 col-md-12 col-sm- col-xs-12">
								{{-- <p>Returning customer? <a class="login" href="user-login.html">Click here to login</a>.</p> --}}
								<div class="panel-group" >




									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													Payment
												</a>
											</h4>
										</div>
										<div  class="accordion-body " style="height: 0px;">
											<div class="panel-body">
												<table class="cart-summary table table-bordered">
													<thead>
														<tr>

															<th>Name</th>
															<th class="width-100 text-center">Unit price</th>
															<th class="width-100 text-center">Qty</th>
															<th class="width-100 text-center">Total</th>
														</tr>
													</thead>

													<tbody>
                                                        @foreach ($orders->orderItem as $orderItem )
														<tr>

															<td>
																<a href="product-detail-left-sidebar.html" class="product-name"> {{$orderItem->ticket->event->name}}</a>
															</td>
															<td class="text-center">
																${{$orderItem->ticket->price}}
															</td>
															<td class="text-center">
																{{$orderItem->quantity}}
															</td>
															<td class="text-center">
																${{$orderItem->ticket->price* $orderItem->quantity}}
															</td>
														</tr>
                                                        @endforeach


													</tbody>
												</table>

												<h4 class="heading-primary">Cart Total</h4>
												<table class="table cart-total">
													<tbody>


														<tr>
															<th>
																<strong>Order Total</strong>
															</th>
															<td class="total">
																${{$orders->amount}}
															</td>
														</tr>
													</tbody>
												</table>

												<h4 class="heading-primary">Payment</h4>
												<form action="{{route('paynowPayment')}}" id="myform" method="POST">
                                                    @csrf

                                                    <div class="col-md-12" style="padding:8px">
                                                        <label>Name </label>
                                                        <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control">
                                                    </div>
                                                    <div class="col-md-12" style="padding:8px">
                                                        <label>Email </label>
                                                        <input type="text" value="{{Auth::user()->email}}" name="email" class="form-control">
                                                    </div>
                                                    <div class="col-md-12" style="padding:8px">
                                                        <label>Ecocash Number </label>
                                                        <input type="text" value="" name="ecocash_number" class="form-control">
                                                    </div>
													<div class="item" style="padding:8px">
													Pay by Paynow Ecocash (payment processing will be take time)
													</div>

												</form>
											</div>
										</div>
									</div>
								</div>


                                <div class="pull-right">
                                    <input type="submit" form="myform"  class="btn btn-primary">
                                </div>
							</div>


						</div>
					</div>
				</div>
			</div>









            @include('layouts.client-footer')

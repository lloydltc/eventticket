<div>
    <div>
    {{-- The whole world belongs to you. --}}
    <div id="content" class="site-content">
        <!-- Breadcrumb -->
        <div class="block-title">
            <h2 class="title"><span>Shopping Cart</span></h2>
        </div>

        <div class="tab-content" style="margin-left: 40px; margin-bottom:16px; padding:0px">
            <!-- Products Grid -->
            <div class="tab-pane active" id="products-grid">
                <div class="products-block">
                    <div class="row">
                        @foreach ($event->ticket as $ticket)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="{{ asset('assets/client/img/product/lava.jpg') }}"
                                                alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-title">
                                        <a href="#">
                                            {{ $event->name }}
                                        </a>
                                    </div>



                                    <div class="product-price">
                                        <span class="sale-price">${{ $ticket->price }}</span>
                                    </div>

                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#" wire:key="{{$ticket->id}}"
                                            wire:click.prevent="addToCart({{ $ticket->id }})">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>
                                    </div>


                                </div>


                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="page-cart">
                <div class="table-responsive">
                    <table class="cart-summary table table-bordered">
                        <thead>
                            <tr>
                                <th class="width-20">&nbsp;</th>

                                <th>Name</th>
                                <th class="width-100 text-center">Unit price</th>
                                <th class="width-100 text-center">Qty</th>
                                <th class="width-100 text-center">Total</th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (!empty($orders))


                            @foreach ($orders->orderItem as $orderItem )


                            <tr>
                                <td class="product-remove">
                                    <a title="Remove this item" class="remove" href="#" wire:click.prevent="remove({{$orderItem->id}})">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>

                                <td>
                                    <a href="#" class="product-name">
                                        {{$orderItem->ticket->event->name}}</a>
                                </td>
                                <td class="text-center">
                                    ${{$orderItem->ticket->price}}
                                </td>
                                <td>
                                    <div class="product-quantity">
                                        <div class="qty">
                                            <div class="input-group">
                                                <input type="text" name="qty" value="{{$orderItem->quantity}}" disabled data-min="1">
                                                <span class="adjust-qty">
                                                    <span class="adjust-btn plus" wire:click="add({{$orderItem->id}})">+</span>
                                                    <span class="adjust-btn minus"  wire:click="less({{$orderItem->id}})">-</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @php
                                        $tot = $orderItem->ticket->price* $orderItem->quantity
                                    @endphp
                                    ${{$tot}}
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>

                        <tfoot>

                            <tr class="cart-total">
                                <td rowspan="3" colspan="2"></td>
                                <td colspan="2" class="total text-right">Total</td>
                                <td colspan="1" class="total text-center">${{$total}}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="checkout-btn">
                    <a href="{{route('checkout')}}" class="btn btn-primary pull-right" title="Proceed to checkout">
                        <span>Proceed to checkout</span>
                        <i class="fa fa-angle-right ml-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


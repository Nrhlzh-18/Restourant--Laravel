

<html>
<head>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }} "></script>
    <script src="{{ asset('js/jquery.lock.js') }}"></script>
    <script src="{{ asset('js/jquery.lock.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
    <script>
  $(document).ready(function() {
    $(".wibo").lock();
  });
</script>
    <title>STRUK PEMBELIAN</title>
</head>
<body>
<div class="card">
        <div class="card-header py-3">    
        </div>
            <div class="card-body">
                <div class="input-group mb-3">              
                    <span class="input-group-text" id="basic-addon1">Customer</span>
                    <span class="input-group-text" id="basic-addon2">{{ $order->customer->nameCustomer }}
                        {{ $order->customer->member ? '(member)' : '' }}</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Code Order</span>
                    <span class="input-group-text" id="basic-addon1">{{ $order->code }}</span>                    
                </div>
                <div class="input-group mb-3">                
                    <div class="d-flex justify-content-betwen fst-italic">
                        <div class="d-md-flex justify-content-md-center">
                            <div class="table-responsive">
                                <table class="table" style="align-items: center;">
                                    <thead>
                                        <tr>
                                            <th>Menu</th>
                                            <th>Quantity</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    @foreach ($order->orderItem as $orderItem)
                                    <tbody>
                                        <tr>
                                            <td>{{ $orderItem->menu->nameMenu }}</td>
                                            <td>{{ $orderItem->quantity }}</td>
                                            <td>{{ $orderItem->subTotal }}</td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                                                   
                    @if ($order->customer->member)
                    <div class="text-end fst-italic input-group mb-3">
                        <small class="me-3">Discount Member :</small>
                        <small class="border-top border-dark">10 %</small>  
                    </div>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <small class="me-3">Total :</small>
                    <small class="border-top border-dark">{{ $order->total }}</small>             
                </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
</html>

<script language="javascript">

function printWindow() {

bV = parseInt(navigator.appVersion);

if (bV >= 4) window.print();}

printWindow();

</script>



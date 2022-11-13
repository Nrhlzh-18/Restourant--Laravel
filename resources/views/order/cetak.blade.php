<html>
<head>
    <script src="{{ asset('js/jquery-1.10.2.min.js') }} "></script>
    <script src="{{ asset('js/jquery.lock.js') }}"></script>
    <script src="{{ asset('js/jquery.lock.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css')}}">
    <script>
  $(document).ready(function() {
    $(".wibo").lock();
  });
</script>
    <title>Cetak Struk</title>
</head>
<body>
<div class="card">
        <div class="card-header py-3">
            <h3 class="text" align="center">Struk Pembelian</h3>
        </div>
            <div class="card-body">
                    <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <p class="m-0">Customer :</p>
                            <small class="fst-italic">
                                {{ $order->customer->nameCustomer }}
                                {{ $order->customer->member ? '(member)' : '' }}
                            </small>
                            <div class="mb-3">
                                <p class="m-0">Code :</p>
                                <small>
                                    {{ $order->code }}
                                </small>
                            </div>
                <div class="mb-3">
                <p class="m-0">Detail Order :</p>
                @foreach ($order->orderItem as $orderItem)
                    <div class="d-flex justify-content-betwen fst-italic">
                        <small>{{ $orderItem->menu->nameMenu }}</small>
                        <small>{{ $orderItem->quantity }}</small>
                        <small>{{ $orderItem->subTotal }}</small>
                </div>
                @endforeach

                @if ($order->customer->member)
                <div class="text-end fst-italic">
                    <small class="me-3">Discount Member :</small>
                    <small class="border-top border-dark">10 %</small>  
                </div>
                @endif

                <div class="text-end fst-italic">
                    <small class="me-3">Total :</small>
                    <small class="border-top border-dark">{{ $order->total }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('/bootstrap/js/bootstrap.min.js')}}"></script>
</html>

<script language="javascript">

function printWindow() {

bV = parseInt(navigator.appVersion);

if (bV >= 4) window.print();}

printWindow();

</script>
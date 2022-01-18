<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
    margin-top: 20px;
}
</style>
<div id="PrintTableArea">
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
            
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>

                     
                        <strong>{{auth()->user()->name}}</strong>
                        <br>
                        {{auth()->user()->email}}
                        <br>
                        {{auth()->user()->number}}
                        <br>
                        Flourish Store
                        <br>
                        Uttara Sector 10, Rode 13
                        <br>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: 1st November, 2013</em>
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($carts)
                         @foreach($carts as $key=>$data)
                        <tr>
                            <td class="col-md-9"><em>{{$data['product_name']}}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> {{$data['product_qty']}} </td>
                            <td class="col-md-1 text-center">{{$data['product_price']}}</td>
                            <td class="col-md-1 text-center">{{$data['product_price'] * $data['product_qty']}}</td>
                        </tr>
                        @endforeach
                        @endif
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>$6.94</strong>
                            </p>
                            <p>
                                <strong>$6.94</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                        </tr>
                       
                    </tbody>
                </table>
                </div>
                <a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print Receipt</a>

              
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
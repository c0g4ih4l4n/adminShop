
@extends ('layouts.main')

@section ('header-css')
    @include ('layouts.material.header-css-main')
@stop

@section ('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Product List</h1>
                <h1 class="page-subhead-line">Include: Name, Category, Brand, Size, Color, Chat Lieu, Gia Thanh, So San Pham Co San</h1>

            </div>
        </div>
        <!-- /. ROW  -->

    <div class="row">


<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading">
        Product
    </div>
    <div class="panel-body">
        <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Chat Lieu</th>
                        <th>Gia Thanh</th>
                        <th>So San Pham Co San</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($list_product as $product)

                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->material }}</td>
                        <td>{{ $product->cost }}</td>
                        <td>{{ $product->quantity_remain }}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
 <!-- End  Kitchen Sink -->

     </div>
</div>
    <!-- /. ROW  -->
</div>
@stop

@section ('script')
    @include ('layouts.material.main-script')
@stop

@extends ('layouts.main')

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

                        <th>1</th>
                        <th>Sh's Van</th>
                        <th>Shoe</th>
                        <th>Vans</th>
                        <th>M,N,S,P</th>
                        <th>Red</th>
                        <th>Cotton</th>
                        <th>10.000</th>
                        <th>1002</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    {{-- @foreach ($list_cate as $category)

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->number_of_products }}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>

                    @endforeach --}}
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

@extends ('layouts.main')

@section ('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Category List</h1>
                <h1 class="page-subhead-line">Include: Name, Number of Products</h1>

            </div>
        </div>
        <!-- /. ROW  -->

    <div class="row">


<!--   Kitchen Sink -->
<div class="panel panel-default">
    <div class="panel-heading">
        Category
    </div>
    <div class="panel-body">
        <div class="table-responsive">

            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Number Of Products</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($list_cate as $category)

                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->number_of_products }}</td>
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
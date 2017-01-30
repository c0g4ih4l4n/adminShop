

@extends ('layouts.main')
@section ('content')
<div id="page-wrapper">
<div id="page-inner">

<div class="panel panel-info">
    <div class="panel-heading">
       Create New Category
    </div>

    <div class="panel-body">
        <form role="form" action="{{ URL::route('category.store') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Category Name</label>
                <input class="form-control" type="text" placeholder="Category Name Here .." name="name">
                <p class="help-block"></p>
            </div>

            <button type="submit" class="btn btn-info">Create </button>

        </form>
    </div>
</div>

</div>

</div>
@stop
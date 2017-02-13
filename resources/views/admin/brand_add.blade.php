

@extends ('layouts.main')

@section ('header-css')
    @include ('layouts.material.header-css-main')
@stop

@section ('content')
<div id="page-wrapper">
<div id="page-inner">

<div class="panel panel-info">
    <div class="panel-heading">
       Create New Brand
    </div>

    <div class="panel-body">

    {{-- Form Create Brand --}}
        <form role="form" action="{{ URL::route('brand.store') }}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Brand Name</label>

                {{-- Old Value --}}
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Brand Name Here ..">

                {{-- Error --}}
                @if (isset($errors))
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif

            </div>

            <button type="submit" class="btn btn-info">Create </button>

        </form>
    </div>
    {{-- ./PANEL BODY --}}
</div>

</div>

</div>
@stop


@section ('script')
    @include ('layouts.material.main-script')
@stop


@extends ('layouts.main')

@section ('header-css')
    @include ('layouts.material.header-css-main')
    @include ('layouts.material.header-css-jQueryUpload')
@stop

@section ('content')


<div id="page-wrapper">
<div id="page-inner">

<div class="panel panel-info">
    <div class="panel-heading">
       Create New Product
    </div>

    <div class="panel-body">

        {{-- Form Create Category --}}
        <form role="form" action="{{ URL::route('product.store') }}" method="POST" id="fileupload" enctype="multipart/form-data">

        @if (isset($errors))
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <div class="row">
            {{ csrf_field() }}
            <div class="form-group col-md-5">
                <label>Product Name</label>

                {{-- Old Value --}}
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Product Name Here ..">

            </div>

        </div>

        <div class="row">
        <div class="form-group col-md-5">
            <label>Sex</label>

            @if (old('sex') != null)
            <div class="radio">
                <label>
                @if (old('sex') == 0)
                    <input type="radio" name="sex" id="optionsRadios1" value="0" checked="">Nam
                @else
                    <input type="radio" name="sex" id="optionsRadios1" value="0">Nam
                @endif

                </label>
            </div>
            <div class="radio">
                <label>
                @if (old('sex') == 1)
                    <input type="radio" name="sex" id="optionsRadios1" value="1" checked="">Nu
                @else
                    <input type="radio" name="sex" id="optionsRadios1" value="1">Nu
                @endif
                </label>
            </div>

            @else

            <div class="radio">
                <label>
                    <input type="radio" name="sex" id="optionsRadios1" value="0" checked="">Nam
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sex" id="optionsRadios2" value="1">Nu
                </label>
            </div>

            @endif
        </div>
        </div>

        {{-- List Category --}}
        <div class="row">
            <div class="form-group col-md-5">
                <label>Category</label>

            @if (old('category_id') == null)
                <select class="form-control" name="category_id">
                    <option value="0">Pick A Category</option>
                @foreach ($list_category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
            @else
                <select class="form-control" name="category_id">
                    <option value="0">Pick A Category</option>
                @foreach ($list_category as $category)
                    @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected="selected">{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
                </select>
            @endif
            </div>


        {{-- List Brand --}}
            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Brand</label>
                @if (old('brand_id') == null)
                    <select class="form-control" name="brand_id">
                        <option value="0">Pick A Brand</option>
                    @foreach ($list_brand as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                    </select>
                @else
                    <select class="form-control" name="brand_id">
                        <option value="0">Pick A Brand</option>
                    @foreach ($list_brand as $brand)
                    @if (old('brand_id') == $brand->id)
                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                    @else
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endif
                    @endforeach
                    </select>
                @endif
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>Size</label>

                    <input class="form-control" type="text" name="size" placeholder="Enter Size here .." value="{{ old('size') }}">
                </div>

            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Color</label>

                    <input class="form-control" type="text" name="color" placeholder="Enter Color here .." value="{{ old('color') }}">
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>Chat Lieu</label>

                    <input class="form-control" type="text" name="material" placeholder="Chat Lieu .."  value="{{ old('material') }}">
                </div>

            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Gia Thanh</label>

                    <input class="form-control" type="text" name="cost" placeholder="Enter Cost here .."  value="{{ old('cost') }}">
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>So San Pham Co San</label>

                    <input class="form-control" type="text" name="quantity_remain" placeholder="So San Pham co san .." value="{{ old('quantity_remain') }}">
                </div>
        </div>

{{--         <div class="row">

            <div class="form-group">
                <label class="control-label col-lg-4 col-md-4">Pre Defined Image</label>
                <div class="">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{ URL::asset('img/demoUpload.jpg') }}" alt="" /></div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                            <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}


        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <label class="control-label col-lg-12 col-md-12 row">Pre Defined Image</label>
        <div class="row fileupload-buttonbar form-group">

            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>

        <div class="clearfix"></div>


            <button type="submitbmit" class="btn btn-info">Create </button>

        </form>
    </div>
    {{-- ./PANEL BODY --}}
</div>

</div>

</div>


@stop

@section ('script')
    @include ('layouts.material.main-script')
    @include ('layouts.material.jqy-file-upload')
@stop
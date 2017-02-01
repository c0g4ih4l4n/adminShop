

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
        <form role="form" action="{{ URL::route('category.store') }}" method="POST" id="fileupload" enctype="multipart/form-data">

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
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Nam
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Nu
                </label>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>Category</label>

                    <select class="form-control">
                        <option>One Vale</option>
                    </select>
                </div>

            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Brand</label>

                    <select class="form-control">
                        <option>One Vale</option>
                    </select>
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>Size</label>

                    <input class="form-control" type="text" name="size" placeholder="Enter Size here ..">
                </div>

            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Color</label>

                    <input class="form-control" type="text" name="color" placeholder="Enter Color here ..">
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>Chat Lieu</label>

                    <input class="form-control" type="text" name="material" placeholder="Chat Lieu ..">
                </div>

            <div class="form-group col-md-5 col-md-offset-1">
                    <label>Gia Thanh</label>

                    <input class="form-control" type="text" name="cost" placeholder="Enter Cost here ..">
                </div>
            <hr>

        </div>

        <div class="row">
            <div class="form-group col-md-5">
                    <label>So San Pham Co San</label>

                    <input class="form-control" type="text" name="quantity_remain" placeholder="So San Pham co san ..">
                </div>
        </div>

        <div class="row">

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

        </div>

            <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
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
    </form>

                    {{-- Category - check list --}}
          {{--   <div class="form-group">
                <label for="">Category</label>
                <select class="form-control">
                    <option>One Vale</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Brand</label>
                <select class="form-control">
                    <option>One Vale</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control">
                    <option>One Vale</option>
                </select>
            </div> --}}

        <div class="clearfix"></div>


            <button type="submit" class="btn btn-info">Create </button>

        </form>
    </div>
    {{-- ./PANEL BODY --}}
</div>

</div>

</div>

@include ('layouts.material.jqy-file-upload')
@stop
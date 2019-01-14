@extends('dashboard.layouts.default')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Product</h3>
                <div class="box-tools pull-right">
                    <a href="{{ action('ProductController@getIndex') }}" type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Show Products">
                        <i class="fa fa-list"></i></a>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                </div>
            </div>
            {!! Form::model($product,['action'=>['ProductController@update',$product->id],'method'=>'patch','class'=>'form-horizontal','files'=>true,'enctype'=>'multipart/form-data']) !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-2">
                        <p class="col-sm-offset-3 alert alert-info">
                            <strong>Note:</strong>
                            To auto generate slug just leave empty the slug field.
                        </p>
                        @include('dashboard.partials.formErrorMessage')
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 control-label">Title <span>*</span></label>
                            <div class="col-sm-9">
                                {!! Form::text('name',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Product Title','required'=>true,'autofocus'=>true])  !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 control-label">Slug <span>*</span></label>
                            <div class="col-sm-9">
                                {!! Form::text('slug',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Slug'])  !!}
                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-sm-3 control-label">Price <span>*</span></label>
                            <div class="col-sm-9">
                                {!! Form::number('price',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Price','required'=>true])  !!}
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                {!! Form::textarea('description',$value= null, $attributes = ['class'=>'form-control tex-editor','placeholder'=>'Description'])  !!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-sm-3 control-label">Addtional Information</label>
                            <div class="col-sm-9">
                                {!! Form::textarea('Addtional_Information',$value= null, $attributes = ['class'=>'form-control tex-editor','placeholder'=>'Addtional_Information'])  !!}
                                @if ($errors->has('Addtional_Information'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Addtional_Information') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('color') ? ' has-error' : '' }}">
                            <label for="price" class="col-sm-3 control-label">Product Color <span>*</span></label>
                            <div class="col-sm-9">
                              <select multiple="multiple" name="color[]" class="form-control select2" id="color_select">
                              <option disabled>Select Color</option>
                                <option value="white">White</option>
                                <option value="black">black</option>
                                <option value="green">Green</option>
                                <option value="grey">gray</option>
                                <option value="pink">pink</option>
                                <option value="violet">Violet</option>
                                <option value="brown">Brown</option>
                                <option value="blue">Blue</option>
                                <option value="maroon">Maroon</option>
                                <option value="olive">olive</option>
                            </select>
                               
                                @if ($errors->has('color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('color') ? ' has-error' : '' }}">
                        <label for="price" class="col-sm-3 control-label">Size/Dimension <span>*</span></label>
                        <div class="col-sm-9">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="checkbox">
                                <label>
                                <input type="radio" name="size" value="size" class="checkboxsize">
                                  Product Size </label>
                                </div>
                                </div>
                               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="checkbox">
                                <label>
                                    <input type="radio" name="size"  value="dim" class="checkboxsize">
                                    Product Dimension
                                </label>
                             </div>
                           </div>
                         </div>
                        </div>
                           <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}" id="main_price">
                            <label for="price" class="col-sm-3 control-label">Price <span>*</span></label>
                            <div class="col-sm-9">
                            <input type="number" name="price" id="orgprice" class="form-control" placeholder="Price" >
                               
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}" id="dim_offer" style="display:none">
                            <label for="price" class="col-sm-3 control-label">Discount Offer <span></span></label>
                            <div class="col-sm-9">
                           
                           <select name="dim_offer" id="demoffers" class="form-control" >
                               <option value="">Select Offer</option>
                                <?php 
                                        for($i=1; $i<=100; $i++){
                                            $i=$i+4;
                                            echo "<option value='$i'>$i % offer</option>";
                                        }
                                ?>
                           </select>
                           
                               
                                @if ($errors->has('dim_offer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dim_offer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}" id="main_sale">
                            <label for="price" class="col-sm-3 control-label">Discount Offer <span></span></label>
                            <div class="col-sm-9">
                           
                           <select name="offer" id="offers" class="form-control" >
                               <option value="">Select Offer</option>
                                <?php 
                                        for($i=1; $i<=100; $i++){
                                            $i=$i+4;
                                            echo "<option value='$i'>$i % offer</option>";
                                        }
                                ?>
                           </select>
                           
                               
                                @if ($errors->has('offer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('offer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div id="salepricemain" class="form-group {{ $errors->has('description') ? ' has-error' : '' }}" style="display:none">
                            <label for="description" class="col-sm-3 control-label">Sale Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="saleprice" id="saleprice" class="form-control" placeholder="Price">
                                @if ($errors->has('saleprice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('saleprice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group {{ $errors->has('p_size') ? ' has-error' : '' }}" style="display:none" id="showdim">
                            <label for="price" class="col-sm-3 control-label">Product Dimension  <span>*</span></label>
                            <div class="col-sm-9 optionBox">

                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="padding-top: 5px;">
                               
                               <input type="text" id="i" class="form-control" name="p_dimension[]" placeholder="Enter Dimension">
                                
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="padding-top: 5px;">
                               
                               <input type="text"  id="inpu" class="form-control" name="p_price[]" placeholder="Enter Price">
                                
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 block" style="padding-top: 5px;">
                            <span class="add" style=""><i class="fa fa-plus"></i></span>
                        </div>

                        </div>
                        </div>
                         <div class="form-group {{ $errors->has('p_size') ? ' has-error' : '' }}" style="display:none" id="showsize">
                            <label for="" class="col-sm-3 control-label">Product Size <span>*</span></label>
                            <div class="col-sm-9">
                              <select multiple="multiple" name="p_size[]" class="form-control select2" id="size_select" style="width:100%">
                              <option disabled>Select size</option>
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                                <option value="xxl">XXL</option>
                                <option value="xxxl">XXXL</option>
                            </select>
                               
                                @if ($errors->has('p_size'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_size') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('categories') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-sm-3 control-label">Product Category</label>
                            <div class="col-sm-9">
                                <select name="category_id" id="category_id" class="form-control select2">
                                    @foreach($categories as $category_id=>$category_name)
                                        <option {{ $product->category_id == $category_id?' selected=""':'' }}  value="{{ $category_id }}">{{ $category_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('tags') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                           <div class="form-group {{ $errors->has('navs') ? ' has-error' : '' }}">
                            <label for="navs" class="col-sm-3 control-label">Product Pages <span>*</span></label>
                            <div class="col-sm-9">
                                 <select name="navs[]" id="categories" data-placeholder="Pages where product will be visible" class="form-control select2" multiple>
                                    @foreach($navs->where('slug','shop')->first()->sub_navs as $nav)
                                        <option {{ $product->navs->contains($nav)?'selected="selected"':'' }} value="{{ $nav->id }}">{{ $nav->title }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('navs'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('navs') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="tags" class="col-sm-3 control-label">Tags</label>
                            <div class="col-sm-9">
                                <select name="tags[]" id="tags" class="form-control select2" multiple>
                                    @foreach($tags as $id=>$tag)
                                        <option {{ $product->tags->contains($id)?'selected="selected"':'' }} value="{{ $id }}">{{ $tag }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('tags'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('tags') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <hr>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('meta_title') ? ' has-error' : '' }}">
                            <label for="meta_title" class="col-sm-3 control-label">Meta Title</label>
                            <div class="col-sm-9">
                                {!! Form::text('meta_title',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Meta Title'])  !!}
                                @if ($errors->has('meta_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meta_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                            <label for="meta_keywords" class="col-sm-3 control-label">Meta Keywords</label>
                            <div class="col-sm-9">
                                {!! Form::text('meta_keywords',$value= null, $attributes = ['class'=>'form-control','placeholder'=>'Meta Keywords'])  !!}
                                @if ($errors->has('meta_keywords'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meta_keywords') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label for="meta_description" class="col-sm-3 control-label">Meta Description</label>
                            <div class="col-sm-9">
                                {!! Form::textarea('meta_description',$value= null, $attributes = ['class'=>'form-control tex-editor','placeholder'=>'Meta Description'])  !!}
                                @if ($errors->has('meta_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meta_keywords') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('photos') ? ' has-error' : '' }}">
                            <label class="col-sm-3 control-label"> Photos</label>
                            <div class="col-sm-9">
                                <input type="file" name="photos[]" multiple class="input-photo" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('photos') ? ' has-error' : '' }}">
                            <div class="col-sm-9 col-sm-offset-3 preview-images">
                            </div>
                        </div>
                </div>
              </div>
             /.box-body
            <div class="box-footer clearfix">
                <div class="row">
                    <div class="col-sm-11">
                        <span class="pull-right">
                             <button type="reset" class="btn btn-default">Cancel</button>
                             &nbsp;
                             <button type="submit" class="btn btn-info ">Update</button>
                        </span>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
                    /.box-footer
        </div>
        <!-- /.box -->
    </section>
@stop
@section('footer')
<script src="{{ asset('assets/tinymce/tinymce.min.js') }}"></script>

    <script>
         tinymce.init({
    selector: '.tex-editor',
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    },
    height: 200,
    menubar: false,
    plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
    ],
    toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify bullist numlist outdent indent | link'
});
        function readURL(input) {
            if (input.files && input.files.length>0) {
                for (var i=0;i<input.files.length;i++){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.preview-images').append('<img width="200" src="'+ e.target.result +'" id="image_upload_preview" class="img-responsive img-thumbnail">')
                    };
                    reader.readAsDataURL(input.files[i]);
                }

            }
        }
        $(".input-photo").change(function () {
            $('.preview-images').html('');
            readURL(this);
        });
        $(function () {
            //Initialize Select2 Elements
            try {
                $(".select2").select2({
                    placeholder:'Select Tags'
                });
            }catch (e){
                console.error(e);
            }
            try {
                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
            }catch (e){
                console.error(e);
            }

        });
    </script>
@stop
 
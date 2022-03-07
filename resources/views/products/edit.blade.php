@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.product.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.products.update", [$product->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($product) ? $product->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.product.fields.description') }}*</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($product) ? $product->description : '') }}" required>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.description_helper') }}
                </p>
            </div>
             <div class="form-group {{ $errors->has('Parent-Category') ? 'has-error' : '' }}">
                    <label for="Parent-Category">{{ 'Product Category' }}*</label>
                    <select class="form-control" name="Parent-Category" id="parentCategory">
                            @foreach ($mainCategory as $pcitem)
                                <option value="{{ $pcitem->id }}">{{ $pcitem->name }}</option>
                            @endforeach
                    </select>
                    @if($errors->has('Parent-Category'))
                        <em class="invalid-feedback">
                            {{ $errors->first('Parent-Category') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="quantity">{{ trans('cruds.product.fields.quantity') }}*</label>
                <div class="col-sm-2 {{ $errors->has('quantity') ? 'has-error' : '' }}">
                    <input type="text" id="quantity" name="quantity" class="form-control" value="{{ old('quantity', isset($product) ? $product->quantity : '') }}" required>
                    @if($errors->has('quantity'))
                        <em class="invalid-feedback">
                            {{ $errors->first('quantity') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.quantity_helper') }}
                    </p>
                </div>
                <label class="col-sm-2 col-form-label" for="discount">{{ trans('cruds.product.fields.discount') }}*</label>
                <div class="col-sm-2 {{ $errors->has('discount') ? 'has-error' : '' }}">
                    <input type="text" id="discount" name="discount" class="form-control" value="{{ old('discount', isset($product) ? $product->discount : '') }}">
                    @if($errors->has('discount'))
                        <em class="invalid-feedback">
                            {{ $errors->first('discount') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.discount_helper') }}
                    </p>
                </div>
                <label class="col-sm-2 col-form-label" for="selling_price">{{ trans('cruds.product.fields.selling_price') }}*</label>
                <div class="col-sm-2 {{ $errors->has('selling_price') ? 'has-error' : '' }}">
                    <input type="text" id="selling_price" name="selling_price" class="form-control" value="{{ old('selling_price', isset($product) ? $product->selling_price : '') }}">
                    @if($errors->has('selling_price'))
                        <em class="invalid-feedback">
                            {{ $errors->first('selling_price') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.selling_price_helper') }}
                    </p>
                </div>

                <label class="col-sm-2 col-form-label" for="imagename">{{ trans('cruds.product.fields.imagename') }}</label>
                <div class="col-sm-2 input-group hdtuto control-group lst increment">
                    <img src="{{ URL::asset('/products_images/'.$product->image_path) }}" alt="profile Pic" height="200" width="200">
                    <input type="file" name="imagename" class="myfrm form-control">

                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="show_on_website">{{ trans('cruds.product.fields.show_on_website') }}*</label>
                <div class="col-sm-2 {{ $errors->has('show_on_website') ? 'has-error' : '' }}">
                    <select class="form-control" name="show_on_website" id="show_on_website">
                        @if($product->show_on_website == 0)
                            <option value="0" selected>Disabled</option>
                            <option value="1" >Enabled</option>
                        @else
                            <option value="1" selected>Enabled</option>
                            <option value="0" >Disabled</option>
                        @endif
                    </select>
                    @if($errors->has('show_on_website'))
                        <em class="invalid-feedback">
                            {{ $errors->first('show_on_website') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.show_on_website_helper') }}
                    </p>
                </div>
                <label class="col-sm-2 col-form-label" for="status">{{ trans('cruds.product.fields.status') }}*</label>
                <div class="col-sm-2 {{ $errors->has('status') ? 'has-error' : '' }}">
                    <select class="form-control" name="status" id="status">
                        @if($product->status == 0)
                            <option value="0" selected>Disabled</option>
                            <option value="1" >Enabled</option>
                        @else
                            <option value="1" selected>Enabled</option>
                            <option value="0" >Disabled</option>
                        @endif
                    </select>

                    @if($errors->has('status'))
                        <em class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.product.fields.status_helper') }}
                    </p>
                </div>
                
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        // price to selling price calculation
        $("#price").keyup(function () {
            var minlength = 1;
            var price = $(this).val();
            var selling_price = 0;
                if (price.length >= minlength ) {
                    if($('#discount').val() >= minlength){
                    selling_price = price - $('#discount').val();
                    $('#selling_price').val(selling_price);
                    }else{
                        $('#selling_price').val(price);
                    }
            }
        });
        $("#discount").keyup(function () {
            var minlength = 1;
            var discount = $(this).val();
            var selling_price = 0;
                if (discount.length >= minlength ) {
                    if($('#price').val() >= minlength){
                    selling_price = $('#price').val() - discount;
                    $('#selling_price').val(selling_price);
                    }else{
                        $('#selling_price').val($('#price').val());
                    }
            }
        });
    });
</script>
@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ 'Category' }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.productsCategories.update", [$productCategories->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($productCategories) ? $productCategories->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.product.fields.description') }}*</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($productCategories) ? $productCategories->description : '') }}" required>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                </p>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Parent Category">{{ 'Parent Category' }}*</label>
                <div class="col-sm-2 {{ $errors->has('Parent Category') ? 'has-error' : '' }}">
                    <select class="form-control" name="Parent Category" id="parentCategory">
                        @foreach ($mainCategory as $pcitem)
                            <option value="{{ $pcitem->id }}">{{ $pcitem->name }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('Parent Category'))
                        <em class="invalid-feedback">
                            {{ $errors->first('Parent Category') }}
                        </em>
                    @endif
                    <p class="helper-block">
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="Visibility">{{ 'Visibility' }}*</label>
                <div class="col-sm-2 {{ $errors->has('Visibility') ? 'has-error' : '' }}">
                    <select class="form-control" name="Visibility" id="Visibility">
                        @if($productCategories->Visibility == 0)
                            <option value="0" selected>Disabled</option>
                            <option value="1" >Enabled</option>
                        @else
                            <option value="1" selected>Enabled</option>
                            <option value="0" >Disabled</option>
                        @endif
                    </select>
                    @if($errors->has('Visibility'))
                        <em class="invalid-feedback">
                            {{ $errors->first('Visibility') }}
                        </em>
                    @endif
                    <p class="helper-block">
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
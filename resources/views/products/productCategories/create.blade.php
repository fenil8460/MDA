@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ 'Category' }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.productsCategories.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.product.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.product.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('Parent-Category') ? 'has-error' : '' }}">
                <label for="Parent-Category">{{ 'Parent Category' }}*</label>
                <select class="form-control" name="Parent-Category" id="parentCategory">
                        <option value="" selected>Not selected</option>
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

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')
@parent
@endsection
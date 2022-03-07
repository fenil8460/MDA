@php
    $flag=0;
@endphp
@extends('layouts.admin')
@section('content')
<div style="margin-bottom: 10px;" class="row">
    <div class="col-lg-12">
        <a class="btn btn-success" href="{{ route("admin.products.create") }}">
            {{ trans('global.add') }} {{ trans('cruds.product.title_singular') }}
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        {{ trans('cruds.product.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.product.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.description') }}
                            
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.selling_price') }}
                            
                        </th>
                        <th>
                            {{ trans('cruds.product.fields.discount') }}
                            
                        </th>
                    
                        <th>
                            {{ trans('cruds.product.fields.quantity') }}
                            
                        </th>
                       
                         <th>
                            {{ trans('cruds.product.fields.status') }}
                            
                        </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                        <tr data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $product->id ?? '' }}
                            </td>
                            <td>
                                {{ $product->name ?? '' }}
                            </td>
                            <td>
                                {{ $product->description ?? '' }}
                            </td>
                            <td>
                                {{ $product->selling_price ?? '' }}
                            </td>
                            <td>
                                {{ $product->discount ?? '' }}
                            </td>
                            <td>
                                {{ $product->quantity ?? '' }}
                            </td>
                            
                            <td>
                                {{ $product->status ?? '' }}
                            </td>
                            
                            <td>
                                @can('view_product')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.products.show', $product->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                                @endcan
                                @can('edit_product')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.products.edit', $product->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.products.addPhotosCreate', $product->id) }}">
                                    {{ trans('global.add').' Photos' }}
                                </a>
                                @endcan
                                @can('delete_product')
                                @php
                                    $flag=1;
                                @endphp
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
    let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
    let deleteButton = {
        text: deleteButtonTrans,
        url: "{{ route('admin.products.mass_destroy') }}",
        className: 'btn-danger',
        action: function (e, dt, node, config) {
        var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
            return $(entry).data('entry-id')
        });

        if (ids.length === 0) {
            alert('{{ trans('global.datatables.zero_selected') }}')

            return
        }

        if (confirm('{{ trans('global.areYouSure') }}')) {
            $.ajax({
            headers: {'x-csrf-token': _token},
            method: 'POST',
            url: config.url,
            data: { ids: ids, _method: 'DELETE' }})
            .done(function () { location.reload() })
        }
        }
    }
    var f = '{{ $flag }}';
    if(f == 1){
        dtButtons.push(deleteButton)
    }

    $.extend(true, $.fn.dataTable.defaults, {
        order: [[ 1, 'desc' ]],
        pageLength: 100,
    });
    $('.datatable-Role:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

    
});
</script>
@endsection
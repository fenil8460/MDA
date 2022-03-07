@extends('layouts.admin')
@section('content')
<style>
.hide{
    display:none;
}
</style>
<div class="card">
    <div class="card-header">
    Add Multiple Photos
    </div>

    <div class="card-body">

        <form method="post" action="{{ route("admin.products.addPhotosStore") }}" enctype="multipart/form-data">
        {{csrf_field()}}

            <div class="input-group hdtuto control-group lst increment" >
            <input type="hidden" name="pid" value="{{ $pid }}" class="myfrm form-control">
            <input type="file" name="filenames[]" class="myfrm form-control">
            <div class="input-group-btn"> 
                <button class="btn btn-success addPhotos" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            </div>
            </div>
            <div class="clone hide">
                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <div class="input-group-btn"> 
                    <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>

        </form>    
        <hr>
        <h3 style="text-align: center;">=== Uploaded Image ===</h3>
        @if(count($product_images) > 0)
        <div class="form-group">
            @foreach($product_images as $pi)
                <div class="col-sm-3 pimages-div">
                    <div class="pimages">
                        <img src="{{asset('products_images/P_'.$pid.'/'.$pi->image_path)}}" width="600px" height="400px">
                    </div>
                    
                    <div class="premoves">
                        <button class="btn btn-danger premove-btn deleteRecord" data-image_id="{{$pi->id}}" data-url="{{route('admin.products.delPhotos', $pi->id)}}"><i class="fas fa-trash-o"></i> Remove</button>
                    </div>
                </div>                                    
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection

@section('scripts')
@parent
<script type="text/javascript">
    $(document).ready(function() {
      $(".addPhotos").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
    //del image
    $(".deleteRecord").click(function(){
        var id = $(this).data("image_id");
        var url = $(this).data("url");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
        {
            url: url,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function (){
                location.reload();
            }
        });
    
    });
</script>
@endsection
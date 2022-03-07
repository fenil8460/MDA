
@include('Admin.header')

<!DOCTYPE html>
<html>
<head>
<title>dashboard</title>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
<link data-require="font-awesome@*" data-semver="4.5.0" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link data-require="datatables@*" data-semver="1.10.12" rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />

</head>

<style type="text/css">
  img{height: 192px!important;width: 295px!important;}
  .plan-container{margin-top: 10px;}
  .controls>.checkbox:first-child {
    padding-top: 5px;
    margin-left: 10px;}
    .control-label{margin-left: -61px}
    .has-error{border-color: red;}
    .text-danger{color: red;margin-bottom: 10px;}
    .control-group{height:   auto;}
    .icon-large{cursor: pointer;margin-left: 15px;}
    a:link {text-decoration: none;}
    a:hover {text-decoration: none;}
</style>
<script type="text/javascript">
$( document ).ready(function() {
 $('#example').dataTable();
 <?php $path='Indowestern';?>
 $("#costume").change(function(){
    if($( "#costume option:selected" ).val()=="Classical")
    { $("#age").val("").change();
    $("#age").attr('disabled', true); 
    }
    else{$("#age").attr('disabled', false);}
});
 

});
function delete_data(id)
{
      swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this record!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   window.location.href="delete_group/"+id;
  } else {
    swal("Your record is safe!");
  }
})
}
</script>
<div class="main">
  <div class="main-inner">
      <div class="container">
             <div class="row">       
            <div class="widget">   
              <div class="widget-header">
                <h3>Class Group Infomation</h3>
            </div> <!-- /widget-header -->

          <div class="widget-content">
            <div class="tab-pane" id="formcontrols">
              @if($errors->any())
               <div class="alert">
                <?php
                    if($errors->first('costume'))
                      {echo "* Select Costume Type ";}
                    if($errors->first('age'))
                      {echo "* Select Age Group";}
                ?>
              </div>
              @endif
              @if(Session::has('status'))
              
               <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
               {{Session::get('status')}}
              </div>
              @endif

                <form id="edit-profile" class="form-horizontal" action="get_costume_picture" method="post">
                  @csrf
                  <fieldset >     
    <div class="control-group span2" style="margin-top: 16px;">
      <label class="control-label">Costume *</label>
        <div class="controls " style="margin-left: 110px;">
           <select name = "costume" id="costume" class="dropdown {{ $errors->has('costume') ? ' has-error' : '' }}" style="width: 120px;">
            <option value = "Indowestern" selected>Indowestern</option>
            <option value = "Western">Western</option>
            <option value = "Classical">Classical</option> 
      </select>  
        </div>
         <!-- /controls -->       
    </div> <!-- /control-group -->
    <div class="control-group span2" style="margin-top: 16px;margin-left: 150px;width: 10px;">                     
      <label class="control-label">Age Group *</label>
        <div class="controls " style="margin-left:110px;">
           <select name = "age" id="age" class="dropdown {{ $errors->has('age') ? ' has-error' : '' }}" style="width: 120px;" >
            <option value = "" selected=""> </option>
            <option value = "4-8" > 4 to 8</option>
            <option value = "8-12"> 8 to 12</option>
            <option value = "12-16"> 12 to 16</option> 
      </select>  
        </div>
        <!-- /controls -->       
    </div> <!-- /control-group -->
                  
  <div class="control-group span5" style="
       padding: 17px 20px 18px;
    margin-top: 0px;
    width: 200px;
    margin-bottom: 18px;
    background-color: #eeeeee;
    border-top: 1px solid #ddd;margin-left: 365px;">
    <div class="controls" style="margin-left: 40px">
                      <input type="submit" class="btn btn-primary" 
                      value="<?php echo (isset($groupdata)) ? 'Update' : 'Submit';?>">
                      <button class="btn">Cancel</button>
                    </div>
                    </div>
                  </fieldset>
                </form>

          </div> <!-- /widget -->
        </div>
      </div> <!-- /container -->
  </div> <!-- /main-inner -->
        <div class="row">          
          <div class="span12">
            
            <div class="widget">
            
          <div class="widget-header">
            <i class="icon-th-large"></i>
            <h3>Choose Your Plan</h3>
          </div> <!-- /widget-header -->
          
          <div class="widget-content">
            <div class="pricing-plans plans-3">
              <?php $i=1;?>
              <?php while(file_exists("assets/images/costumes/".$path."/".$i.".jpg")||file_exists("assets/images/costumes/".$path."/".$i.".png"))
              {?>
              <div class="plan-container">
                  <div class="plan">
                    <div class="plan-features" >
                    <img src="{{URL::asset('assets/images/costumes/'.$path.'/'.$i.'.jpg')}}">
                </div>
                <div class="plan-actions">        
                  <a href="javascript:;" class="btn">Change Picture</a>       
                </div> <!-- /plan-actions -->
          
              </div> <!-- /plan -->
              </div>
        
             <?php $i=$i+1;}?>
          </div> <!-- /pricing-plans -->
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->         
        
        </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

  </script>
  
  @include('Admin.footer')
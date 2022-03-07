
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
                    if($errors->first('groupname'))
                      {echo "* Group Name  is required";}
                ?>
              </div>
              @endif
              @if(Session::has('status'))
              
               <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
               {{Session::get('status')}}
              </div>
              @endif

                <form id="edit-profile" class="form-horizontal" action="<?php echo (isset($groupdata)) ? '/../../edit_group_data/'.$groupdata->Id : 'group_data';?>" method="post">
                  @csrf
                  <fieldset >     
    <div class="control-group span4" style="margin-top: 16px;">                     
      <label class="control-label">Group Name *</label>
        <div class="controls ">
          <input class="{{ $errors->has('classname') ? ' has-error' : '' }}" type="text" id="groupname" name="groupname" placeholder="Class Group Name" value="<?php echo (isset($groupdata)) ? $groupdata->group_name : old('groupname');?>">
        </div>
        
         <!-- /controls -->       
    </div> <!-- /control-group -->
                  
  <div class="control-group span5" style="
       padding: 17px 20px 18px;
    margin-top: 0px;
    margin-bottom: 18px;
    background-color: #eeeeee;
    border-top: 1px solid #ddd;margin-left: 132px;">
    <div class="controls">
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
          <div class="">
            <div id="target-1" class="widget">
              <div class="widget-header">
                <h3>Class Group Infomation</h3>
            </div>
              <div class="widget-content"> 
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Group Name</th>
                      <th>Created by</th>
                      <th>Created at</th>
                      <th>Last Updated By</th>
                      <th>Last Updated at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
            foreach ($grouplist as $key=>$value) {
              echo '<tr><td>'.$value->group_name.'</td>'.
                    '<td>'.$value->created_by.'</td>'.
                    '<td>'.$value->created_at.'</td>'.
                    '<td>'.$value->last_updated_by.'</td>'.
                    '<td>'.$value->last_updated_at.'</td>'.
                    '<td><a href="/edit_group/'.$value->Id.'"><i class="icon-large icon-edit"></i></a><i class="icon-large  icon-trash" onclick=delete_data('.$value->Id.');></i></td></tr>';
            }
            ?> 
                  </tbody>
                </table>
              </div> <!-- /widget-content -->
            </div> <!-- /widget -->
            
          </div> <!-- /span12 -->
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">

  </script>
  
  @include('Admin.footer')
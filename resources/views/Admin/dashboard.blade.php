
@include('Admin.header')
<!DOCTYPE html>
<html>
<head>
<title>dashboard</title>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link data-require="datatables@*" data-semver="1.10.12" rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <link data-require="font-awesome@*" data-semver="4.5.0" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css" />
<script type="text/javascript">
$(function () {

 $.fn.dataTableExt.oApi.fnMultiFilter = function( oSettings, oData ) {

    oSettings.aoPreSearchCols[9].sSearch = oData['class_group'];

    this.oApi._fnReDraw( oSettings );
};
    var classlist=$('#example').dataTable({
      'aoColumns': [
              { 'sName': 'class_name' },
              { 'sName': 'class_description' },
              { 'sName': 'days' },
              { 'sName': 'gender' },
              { 'sName': 'start_date' },
              { 'sName': 'end_date' },
              { 'sName': 'time' },
              { 'sName': 'age' },
              { 'sName': 'tuition' },
              { 'sName': 'class_group' },
              { 'sName': 'action' }
        ],
        'oLanguage': {
            'sEmptyTable': 'No data available.',
            'sZeroRecords': 'No matched records found.'
        },
    });
    $('#apply_filter_btn').click( function() {
        var group = $('#class_group option:selected').val();
        classlist.fnMultiFilter({ 'class_group' : group,});
        $('.close').trigger('click');
    });
     $('#reset_filter_btn').click( function() {
       $('select[name^="class_group"] option:selected').attr("selected",null);
        $('#apply_filter_btn').trigger('click');
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
   window.location.href="delete_class/"+id;
  } else {
    swal("Your record is safe!");
  }
})
}
</script>
<style type="text/css">
  .modal-header .close {
    margin-top: -23px;
}
.modal-header{background: linear-gradient(#69b892, #4995a4) !important;
}
.icon-large{cursor: pointer;}
    a:link {text-decoration: none;}
    a:hover {text-decoration: none;}
</style>
<div class="main">
  <div class="main-inner">
      <div class="container">
        <div class="row">          
          <div class="">
            <div id="target-1" class="widget">
              <div class="widget-header">
                <h3>Class Infomation</h3>
            <i class="fa fa-filter filter_icon" data-toggle="modal" data-target="#modal_date" style="margin-left: 19.5cm;cursor: pointer;font-size: large;"></i>
            </div>

              <div class="widget-content">
              @if(Session::has('status'))
              
               <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
               {{Session::get('status')}}
              </div>
              @endif   
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Class Name</th>
                      <th>Class Description</th>
                      <th>Days</th>
                      <th>Gender</th>
                      <th>Start Date</th>
                      <th>End Date </th>
                      <th>Time</th>
                      <th>Age</th>
                      <th>Tuition</th>
                      <th>Class Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php
            foreach ($grouplist as $key=>$value) {
              echo '<tr><td>'.$value->class_name.'</td>'.
                    '<td>'.$value->class_description.'</td>'.
                    '<td>'.$value->days.'</td>'.
                    '<td>'.$value->gender.'</td>'.
                    '<td>'.$value->class_start_date.'</td>'.
                    '<td>'.$value->class_end_date.'</td>'.
                    '<td>'.$value->time.'</td>'.
                    '<td>'.$value->age.'</td>'.
                    '<td>'.$value->tuition.'</td>'.
                    '<td>'.$value->group_name.'</td>'.
                    '<td><a href="/edit_class/'.$value->Id.'"><i class="icon-large icon-edit"></i></a><br><br><i class="icon-large  icon-trash" onclick=delete_data('.$value->Id.');></i></td></tr>';
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
  <div class="modal modal-info fade " id="modal_date">
  <div class="modal_inr_div">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Search By Filters</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
         <div class="modal-body">
          <div class="inr_flx_bx">
            
                                    
        <div class="control" style="margin-left: 30%;">
          <select name = "class_group" id="class_group">
            <option value = "" selected>---------------Select Group---------------</option>
            <?php
            foreach ($classlist as $key=>$value) {
              echo '<option >'.$value->group_name.'</option>';
            }
            ?> 
      </select>  
      </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline" id="reset_filter_btn">Reset</button>
          <button type="button" class="btn btn-primary" id="apply_filter_btn">Apply</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>
  @include('Admin.footer')
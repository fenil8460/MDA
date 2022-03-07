
@include('Admin.header')
<!DOCTYPE html>
<html>
<head>
<title>dashboard</title>
</head>

<style type="text/css">
  .controls>.checkbox:first-child {
    padding-top: 5px;
    margin-left: 10px;}
    .control-label{margin-left: -61px}
    .has-error{border-color: red;}
    .text-danger{color: red;margin-bottom: 10px;}
    .control-group{height:   auto;}

</style>
<div class="main">
  <div class="">
      <div class="container">
                   
            <div class="widget">   
              <div class="widget-header">
                <h3>Class Infomation</h3>
            </div> <!-- /widget-header -->

          <div class="widget-content">
            <div class="tab-pane" id="formcontrols">
              @if($errors->any())
               <div class="alert">
                <?php
                    if($errors->first('classname'))
                      {echo "* Class Name  is required.<br>";}
                    if($errors->first('description'))
                      {echo "* Class Description is required.<br>";}
                    if($errors->first('days'))
                      {echo "* Select at list one day.<br>";}
                    if($errors->first('gender'))
                      {echo "* Select Gender.<br>";}
                    if($errors->first('class_start'))
                      {echo "* Class Start Date is required.<br>";}
                    if($errors->first('class_end'))
                      {echo "* Class End Date is required.<br>";}
                    if($errors->first('class_timing'))
                      {echo "* Classes Timing is required.<br>";}
                    if($errors->first('tuition'))
                      {echo "* Tuition Fees is required.<br>";}
                    if($errors->first('class_group'))
                      {echo "* Select Class Group.<br>";}

                ?>
              </div>
              @endif
                <form id="edit-profile" class="form-horizontal" action="<?php echo (isset($classdata)) ? '/../../edit_class_data/'.$classdata->Id : 'class_data';?>" method="post">
                  @csrf
                  <fieldset >     
    <div class="control-group span4" >                     
      <label class="control-label">Class Name *</label>
        <div class="controls ">
          <input class="{{ $errors->has('classname') ? ' has-error' : '' }}" type="text" id="classname" name="classname" placeholder="Class Name" value="<?php echo (isset($classdata)) ? $classdata->class_name : old('classname');?>">
        </div>
        
         <!-- /controls -->       
    </div> <!-- /control-group -->
                    
                    
    <div class="control-group span6" style="float: right;">                     
      <label class="control-label"  style="margin-left: -40px;">  Class Description *</label>
        <div class="controls">
          <textarea  id="description" name="description" style="min-width:325px;min-height: 133px;margin-left: -40px;" v placeholder="Description about classes..." class="{{ $errors->has('description') ? ' has-error' : '' }}" value="<?php echo (isset($classdata)) ? $classdata->class_description : old('description');?>"><?php echo (isset($classdata)) ? $classdata->class_description : old('description');?></textarea>
        </div> <!-- /controls -->       
    </div> <!-- /control-group -->                    
  <div class="control-group span5" >                     
    <label class="control-label">Days *</label>
                      
                                            
      <div class="controls">
        <label class="checkbox inline">
          <input type="checkbox" id="Mon" name="days[]" value="Mon" <?php echo (isset($classdata)&&str_contains($classdata->days , 'Mon')) ? 'checked': ""?>>Monday
        </label>
                                            
        <label class="checkbox inline">
          <input type="checkbox" id="Tue" name="days[]" value="Tue" <?php echo (isset($classdata)&&str_contains($classdata->days , 'Tue')) ? 'checked': ""?>> Tuesday
        </label>

         <label class="checkbox inline">
          <input type="checkbox" id="Web" name="days[]" value="Wen"<?php echo (isset($classdata)&&str_contains($classdata->days , 'Wen')) ? 'checked': ""?>> Wednesday
        </label>

          <label class="checkbox inline">
          <input type="checkbox" id="Thur" name="days[]" value="Thur"
          <?php echo (isset($classdata)&&str_contains($classdata->days , 'Thur')) ? 'checked': ""?>> Thursday
        </label>

         <label class="checkbox inline">
          <input type="checkbox" id="Fri" name="days[]" value="Fri"<?php echo (isset($classdata)&&str_contains($classdata->days , 'Fri')) ? 'checked': ""?>>Friday
        </label>


         <label class="checkbox inline">
          <input type="checkbox" id="Sat" name="days[]" value="Sat"<?php echo (isset($classdata)&&str_contains($classdata->days , 'Sat')) ? 'checked': ""?>>Saturday
        </label>
         <label class="checkbox inline">
          <input type="checkbox" id="Sun" name="days[]" value="Sun"
          <?php echo (isset($classdata)&&str_contains($classdata->days , 'Sun')) ? 'checked': ""?>> Sunday
        </label>                                                                          </div>    <!-- /controls -->    
    </div> <!-- /control-group -->
    <div class="control-group span4">                     
      <label class="control-label" style="margin-left: -61px;">Gender *</label>
        <div class="controls" style="margin-left: 106px;">
          <label class="radio inline">
            <input type="radio"  name="gender" id="male" value="Male"
            <?php echo (isset($classdata)&&$classdata->gender=="Male") ? 'checked': ""?>> Male
          </label>

          <label class="radio inline">
            <input type="radio" name="gender" id="female" value="Female"
            <?php echo (isset($classdata)&&$classdata->gender=="Female") ? 'checked': ""?>> Female
          </label>

          <label class="radio inline">
            <input type="radio" name="gender" id="all" value="All"
            <?php echo (isset($classdata)&&$classdata->gender=="All") ? 'checked': ""?>> All
          </label>
        </div>  <!-- /controls -->      
    </div> 
        <div class="control-group span3">                     
      <label class="control-label" style="margin-left: -61px;">Class Start Date *</label>            
        <div class="controls" style="margin-left: 99px;">
          <input type="date" name="class_start" id="class_start" style="width: 150px;" class="{{ $errors->has('class_start') ? ' has-error' : '' }}" onchange="start_date(this)"
          value="<?php echo (isset($classdata)) ? $classdata->class_start_date : old('class_start');?>">
        </div>    
    </div>
     <div class="control-group span3">                     
      <label class="control-label"  style="margin-left: 0px;">Class End Date *</label>            
        <div class="controls">
          <input type="date" style="width: 150px;" name="class_end" id="class_end"   class="{{ $errors->has('class_end') ? ' has-error' : '' }}" 
          value="<?php echo (isset($classdata)) ? $classdata->class_end_date : old('class_end');?>">
        </div>    
    </div> <!-- /control-group -->     
                                                              
                 
    <div class="control-group span5" style="margin-left: 61px;width: 328px;">                     
      <label class="control-label" >Classes Timing * </label>            
        <div class="controls" style="margin-left: 87px">
          <input type="text" style="width: 137px;" placeholder="from-to" name="class_timing" id="class_timing" class="{{ $errors->has('class_timing') ? ' has-error' : '' }}" value="<?php echo (isset($classdata)) ? $classdata->time : old('class_timing');?>">
        </div>    
    </div>
     <div class="control-group span3"  style="margin-left:-140px;">
      <label class="control-label">Age </label>            
        <div class="controls" style="margin-left: 87px;">
          <input type="text" style="width: 100px;" placeholder="from-to" 
          onkeypress='return isNumber(event)' name="age" id="age"  value="<?php echo (isset($classdata)) ? $classdata->age : old('age');?>">
        </div>
    </div>
             
     <div class="control-group span3"  style="margin-left: -41px;">
      <label class="control-label">Tuition *</label>            
        <div class="controls" style="margin-left: 87px;">
          <input type="text" style="width: 100px;" placeholder="120.00" 
          onkeypress='return isNumber1(event)' name="tuition" id="tuition" 
           class="{{ $errors->has('tuition') ? ' has-error' : '' }}"
           value="<?php echo (isset($classdata)) ? $classdata->tuition : old('  tuition');?>">
        </div>
    </div> 
     <div class="control-group span3" style="margin-left: -72px;">                     
      <label class="control-label" style="margin-left: 0px;">Class Group * </label>            
        <div class="controls" >
          <select name = "class_group" id="class_group" class="dropdown {{ $errors->has('class_group') ? ' has-error' : '' }}" style="width: 165px;">
            <option value = "" selected>-------Select Group-------</option>
            <?php
            foreach ($grouplist as $key=>$value) {
              if(isset($classdata)&&$classdata->class_group==$value->Id)
              {echo '<option value = '.$value->Id.' selected>'.$value->group_name.'</option>';}
              else{
              echo '<option value = '.$value->Id.' >'.$value->group_name.'</option>';
            }
            }
            ?> 
      </select>  
      </div>
      </div>

       <div class="control-group span10" style="
       padding: 17px 20px 18px;
    margin-top: 18px;
    width: 22cm;
    margin-bottom: 18px;
    background-color: #eeeeee;
    border-top: 1px solid #ddd;">
    <div class="controls" style="margin-left: 331px;">
                      <input type="submit" class="btn btn-primary" value="<?php echo (isset($classdata)) ? 'Update' : 'Submit'?>">
                      <button class="btn">Cancel</button>
                    </div>
                    </div>

                  </fieldset>
                </form>

          </div> <!-- /widget -->
            
      </div> <!-- /container -->
  </div> <!-- /main-inner -->
</div> <!-- /main -->
</div>
   
   <script type="text/javascript">
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if(charCode == 45 ){return true;}
    else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      alert("Enter only number including dash(-)")
        return false;
    }
     
    return true;
}
  function isNumber1(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if(charCode == 46 ){return true;}
    else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      alert("Enter only number including period(.)")
        return false;
    }
     
    return true;
}
function start_date(e)
{
  document.getElementById("class_end").min = e.value;
}

        </script> 

  @include('Admin.footer')
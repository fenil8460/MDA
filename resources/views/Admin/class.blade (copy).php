
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
                <form id="edit-profile" class="form-horizontal">
                  <fieldset >     
    <div class="control-group span4" >                     
      <label class="control-label" for="firstname">Class Name *</label>
        <div class="controls">
          <input type="text" id="classname" name="classname">
        </div> <!-- /controls -->       
    </div> <!-- /control-group -->
                    
                    
    <div class="control-group span6" style="float: right;">                     
      <label class="control-label" for="lastname" style="margin-left: -40px;">  Class Description *</label>
        <div class="controls">
          <textarea  id="description" name="description" style="min-width:325px;min-height: 133px;margin-left: -40px;" >
          </textarea>
        </div> <!-- /controls -->       
    </div> <!-- /control-group -->                    
  <div class="control-group span5" >                     
    <label class="control-label">Days *</label>
                      
                                            
      <div class="controls">
        <label class="checkbox inline">
          <input type="checkbox" value="Mon">Monday
        </label>
                                            
        <label class="checkbox inline">
          <input type="checkbox" value="Tue"> Tuesday
        </label>

         <label class="checkbox inline">
          <input type="checkbox" value="Wen"> Wednesday
        </label>

          <label class="checkbox inline">
          <input type="checkbox" value="Thur"> Thursday
        </label>

         <label class="checkbox inline">
          <input type="checkbox" value="Fri">Friday
        </label>


         <label class="checkbox inline">
          <input type="checkbox" value="Sat">Saturday
        </label>
         <label class="checkbox inline">
          <input type="checkbox" value="Sun"> Sunday
        </label>                                                                          </div>    <!-- /controls -->    
    </div> <!-- /control-group -->
    <div class="control-group span4">                     
      <label class="control-label" style="margin-left: -61px;">Gender *</label>
        <div class="controls" style="margin-left: 106px;">
          <label class="radio inline">
            <input type="radio"  name="radiobtns" value="Male"> Male
          </label>

          <label class="radio inline">
            <input type="radio" name="radiobtns" value="Female"> Female
          </label>

          <label class="radio inline">
            <input type="radio" name="radiobtns" value="All"> All
          </label>
        </div>  <!-- /controls -->      
    </div> 
        <div class="control-group span3">                     
      <label class="control-label" style="margin-left: -61px;">Class Start Date *</label>            
        <div class="controls" style="margin-left: 99px;">
          <input type="date" style="width: 150px;">
        </div>    
    </div>
     <div class="control-group span3">                     
      <label class="control-label" style="margin-left: 0px;">Class End Date *</label>            
        <div class="controls">
          <input type="date" style="width: 150px;">
        </div>    
    </div> <!-- /control-group -->     
                                                              
                 
    <div class="control-group span5" style="margin-left: 61px;width: 328px;">                     
      <label class="control-label" >Classes Timing * </label>            
        <div class="controls" style="margin-left: 87px">
          <select name = "dropdown" class="dropdown" style="width: 90px;">
            <option value = "9:00am" selected>09:00am</option>
            <option value = "9:30am" >09:30am</option>
            <option value = "10:00am" >10:00am</option>
            <option value = "10:30am" >10:30am</option>
            <option value = "11:00am" >11:00am</option>
            <option value = "11:30am" >11:30am</option>
            <option value = "12:00pm" >12:00pm</option>
            <option value = "5:00pm" >05:00pm</option>
            <option value = "5:30pm" >05:30pm</option>
            <option value = "6:00pm" >06:00pm</option>
            <option value = "6:30pm" >06:30pm</option>
            <option value = "7:00pm" >07:00pm</option>
      </select>  &nbsp;  -
          <select name = "dropdown" class="dropdown" style="width: 90px;margin-left: 10px">
            <option value = "10:00am" selected>10:00am</option>
            <option value = "10:30am" >10:30am</option>
            <option value = "11:00am" >11:00am</option>
            <option value = "11:30am" >11:30am</option>
            <option value = "12:00pm" >12:00pm</option>
            <option value = "5:00pm" >05:00pm</option>
            <option value = "5:30pm" >05:30pm</option>
            <option value = "6:00pm" >06:00pm</option>
            <option value = "6:30pm" >06:30pm</option>
            <option value = "7:00pm" >07:00pm</option>
            <option value = "7:30pm" >07:30pm</option>
            <option value = "8:00pm" >08:00pm</option>
      </select>
        </div>    
    </div>
     <div class="control-group span3"  style="margin-left:-80px;">
      <label class="control-label">Age </label>            
        <div class="controls" style="margin-left: 87px;">
          <input type="text" style="width: 100px;" placeholder="from-to" 
          onkeypress='return isNumber(event)'>
        </div>
    </div>
             
     <div class="control-group span3"  style="margin-left: -41px;">
      <label class="control-label">Tuition *</label>            
        <div class="controls" style="margin-left: 87px;">
          <input type="text" style="width: 100px;" placeholder="120.00" 
          onkeypress='return isNumber1(event)'>
        </div>
    </div> 
     <div class="control-group span3" style="margin-left: -72px;">                     
      <label class="control-label" style="margin-left: 0px;">Class Group * </label>            
        <div class="controls" >
          <select name = "dropdown" class="dropdown" style="width: 100px;">
            <option value = "9:00am" selected>09:00am</option>
            <option value = "9:30am" >09:30am</option>
            <option value = "10:00am" >10:00am</option>
            <option value = "10:30am" >10:30am</option>
            <option value = "11:00am" >11:00am</option>
            <option value = "11:30am" >11:30am</option>
            <option value = "12:00pm" >12:00pm</option>
            <option value = "5:00pm" >05:00pm</option>
            <option value = "5:30pm" >05:30pm</option>
            <option value = "6:00pm" >06:00pm</option>
            <option value = "6:30pm" >06:30pm</option>
            <option value = "7:00pm" >07:00pm</option>
      </select>  
      </div>
      </div>
               
                    <!-- /form-actions -->
                  </fieldset>
                </form>
                 <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button> 
                      <button class="btn">Cancel</button>
                    </div>

          </div> <!-- /widget -->
            
      </div> <!-- /container -->
  </div> <!-- /main-inner -->
</div> <!-- /main -->
</div>
   
   <script type="text/javascript">
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
        </script> 
  @include('Admin.footer')
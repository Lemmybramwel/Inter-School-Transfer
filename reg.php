<script>
function chk()
{
if(chk_email(this.document.frm.user_email.value)==false){alert("Enter correct mail");return false;}
if(this.document.frm.user_pass.value.length < 8)
{
alert("Password should be atleast 8 character long!");
return false;
}
if(this.document.frm.user_email.value==""||this.document.frm.user_fname.value=="" ||
this.document.frm.user_lname.value==""||this.document.frm.user_city.value==""||this.document.frm.user_state.value==-1||
this.document.frm.user_country.value==-1||this.document.frm.user_zip.value==""||this.document.frm.user_phone.value==""||
this.document.frm.user_join_date.value==""||this.document.frm.user_dob.value==""||
this.document.frm.user_gender.value=="-1"||this.document.frm.user_blood_gp.value==-1||this.document.frm.user_dept_id.value=="-1"||
this.document.frm.user_designation.value=="")
{
alert("Please enter all * marked fields to continue");
return false;
}
}
function onChange() 
{
      this.document.frm.act.value="add_user";				
      this.document.frm.submit();
}

</script>      
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
   <td width="10%"  > 
   
      &nbsp;</td>
   <td width="90%"  > 
   
      <div align="left">
   
      <table border="0" cellpadding="0" cellspacing="0" width="100%" bordercolor="#E5E5E5" style="border-collapse: collapse">
        <form method="POST" name="frm" action="{page}" onsubmit="return chk()">       

  <tr> 
              
            <td width="90%" class="normal"  height="22" colspan="2" align="center">
            Registration Form</td>
          </tr>

          <tr> 
              
            <td width="50%"  class="text-normalw"  height="22" align="left">&nbsp;&nbsp;&nbsp; 
            Name* </td>
            <td width="50%"   class="text-normalw"  height="22">&nbsp;<input type="text" name="user_name" size="34" value="{user_name}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"   ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10" ></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left" >&nbsp;&nbsp;&nbsp; 
            Email*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="user_email" size="34" value="{user_email}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
            <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left">&nbsp;&nbsp;&nbsp; 
            Roll Number*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="user_roll" size="34" value="{user_roll}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
          <!--
         <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
            Branch*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="user_branch" size="34" value="{user_branch}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"></td>
            <td width="55%" valign="top"  class="text-normalw"  height="10"></td>
          </tr>
          -->
 
          <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left"  >&nbsp;&nbsp;&nbsp; 
            Semester*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22" >&nbsp;<input type="text" name="user_sem" size="34" value="{user_sem}" class="text-normalw"></td>
          </tr>
          
         
          
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
           <tr> 
            <td width="27%"  class="text-normalw" height="22" align="left" >&nbsp;&nbsp;&nbsp; Year*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="user_year" size="34" value="{user_year}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="dropdown" height="10"  > </td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; User_Admission_Id*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="user_role_id" size="34" value="{user_role_id}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
           <!--
           
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            backlog*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<select size="1" name="user_backlog">
             <option value=-1>please Select</option>
             <option {Yes}>Yes</option>
             <option {No}>No</option>
           
            </select></td>
			<td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="backlog_details" size="34" value="{backlog_details}" class="text-normalw"></td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
          -->
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; pay_ref_id*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="pay_ref_id" size="34" value="{pay_ref_id}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		   <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; Date*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="date" size="34" value="{date}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		 <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            Designation*</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<input type="text" name="user_designation" size="34" value="{user_designation}" class="text-normalw"></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		 <tr> 
          <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            HOD_Approver</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<select size="1" name="hod_app">
            <option value=-1>please Select</option>
             <option {Yes}>Yes</option>
             <option {No}>No</option></select></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            Lib_Approver</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<select size="1" name="lib_app">
            <option value=-1>please Select</option>
             <option {Yes}>Yes</option>
             <option {No}>No</option></select></td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
		  <tr> 
            <td width="27%"  class="text-normalw" height="22"  >&nbsp;&nbsp;&nbsp; 
            Admin_Approver</td>
            <td width="55%" valign="top"  class="text-normalw" height="22"  > &nbsp;<select size="1" name="admin_app">
            <option value=-1>please Select</option>
             <option {Yes}>Yes</option>
             <option {No}>No</option></select></td>
          </tr>
          <tr> 
            <td width="27%"  class="text-normalw" height="10"  ></td>
            <td width="55%" valign="top"  class="text-normalw" height="10"  > </td>
          </tr>
          
          
          <tr align="center"> 
            <td colspan="2" height="10" > 
              </td>
          </tr>
          <tr align="center"> 
            <td colspan="2" height="10" > 
              </td>
          </tr>
            <tr> 
              
            <td width="90%"  class="text-normalw"  height="22" colspan="2" align="center">
            * marked field are mandatory</td>
          </tr>
            <tr align="center"> 
            <td colspan="2" height="10" > 
              </td>
          </tr>
         
          <tr align="center"> 
            <td colspan="2" height="26" > 
              <input type="submit" value="Submit" name="B1" class="normal"></td>
          </tr>
          <input type="hidden" name="act" value="{act}">
           <input type="hidden" name="user_id" value="{user_id}">

          </form>
      </table>
      </div>
      </td>
  </tr>
  </table>
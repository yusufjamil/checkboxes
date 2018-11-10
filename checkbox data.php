<td align="center"><input type="checkbox" class="case" name="case[]" value="CSE"  /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="ECE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="EEE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="MECH" /></td>
</tr>
<tr>  
<td>MGIT</td>
    <td>21524</td>     
      <td align="center"><input type="checkbox" class="case" name="case[]" value="CSE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="ECE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="EEE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="MECH" /></td>
</tr>
<tr>  
<td>JBREC</td>
    <td>221535</td>     
      <td align="center"><input type="checkbox" class="case" name="case[]" value="CSE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="ECE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="EEE" /></td>
  <td align="center"><input type="checkbox" class="case" name="case[]" value="MECH" /></td>
</tr>
</table>
<input type="submit" value="submit">
<div id = inputValues>
</div>
</form>

<div id = inputValues>
</div>
<script>
 var values = new Array();
$("input[name='case[]']").click(function(){

       $.each($("input[name='case[]']:checked"), function() {   
           var data = $(this).parents('tr:eq(0)');
         // console.log()
          var data1 = $(this).val()
          console.log(data1)
           values.push({ 'college':$(data).find('td:eq(0)').text(), 'code':$(data).find('td:eq(1)').text() ,
 'branch': data1                       
                    });             
       });
       
       
       
       
                        
       console.log(values);
       
 });
 </script>
           

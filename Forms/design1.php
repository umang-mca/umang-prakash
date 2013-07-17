<form method="post">
  <table>
    <tbody>
     <tr>
        <td></td>
        <td>First Name</td>
        <td>Middle Name</td>
        <td>Last Name</td>
         
     </tr>
     <tr>
        <td>Name</td>
        <td><input type="text" name="fn" placeholder="First Name" /></td>
        <td><input placeholder="Middle Name" type="text" name="mn"/></td>
        <td><input placeholder="Last Name" type="text" name="ln"/></td>
         
     </tr>
     <tr>
        <td>Address</td>
        <td colspan="3"><textarea name="address" placeholder="Address" ></textarea></td>
         
         
     </tr>
      <tr>
        <td></td>
        <td>City</td>
        <td>State</td>
        <td>Country</td>
     </tr>

     <tr>
        <td> </td>
        <td><input type="text" name="fn"/></td>
        <td><input type="text" name="mn"/></td>
        <td><input type="text" name="ln"/></td>
         
     </tr>

     <tr>
        <td></td>
        <td>Pin</td>
        <td>Phone (R)</td>
        <td>Phone (O)</td>
     </tr>

     <tr>
        <td> </td>
        <td><input placeholder="Pincode" type="number" name="fn"/></td>
        <td><input type="number" name="mn"/></td>
        <td><input type="number" name="ln"/></td>
         
     </tr>

     <tr>
        <td></td>
        <td>Birth Date</td>
        <td>Gender</td>
        <td>Email</td>
     </tr>
      <tr>
        <td> </td>
        <td><input type="date" name="fn"/></td>
        <td>Male <input type="radio" name="mn"/>
            Female <input type="radio" name="mn"/></td>
        <td><input type="email" placeholder="email" name="ln"/></td>
         
     </tr>

     <tr>
        <td>Designation</td>
        <td><select name="dg">
           <option>**Select Designation**</option>
           <option value="AC">Accountant</option>
         </select></td>
        <td>Department</td>
        <td><select name="dp">
           <option>**Select Department**</option>
           <option value="AC">Accountant</option>
         </select></td>
     </tr>
    <tr>
        <td>Locations</td>
        <td><select name="dg" size="5">
           <option value="AC">Gujarat</option>
           <option value="AC">Maharashtra</option>
           <option value="AC">Rajsthan</option>
           <option value="AC">Madhya Predesh</option>
           <option value="AC">Uttar Pradesh</option>
           <option value="AC">Himachal Pradesh</option>
         </select></td>
        <td> </td>
        <td> </td>
     </tr>
      <tr>
        <td>Photo</td>
        <td colspan="3"><input type="file"/></td>
       </tr>

      <tr>
          <td>Hobbies</td>
          <td colspan="3">
             <input type="checkbox"/> Play</br>
             <input type="checkbox"/> Read</br>
             <input type="checkbox"/> Write
           </td>
      </tr>
    <tr>
          <td>Nationality</td>
          <td colspan="3">
             <input type="checkbox"/> India
             <input type="checkbox"/> UK
             <input type="checkbox"/> USA
           </td>
      </tr>
      
      <tr>
      	<td colspan="4">
      		<input type="submit"/>
      	</td>
      </tr>
    </tbody>
  </table>

</form>
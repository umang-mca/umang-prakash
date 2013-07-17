<form>
	<input type="text"
	       name="name"
	       placeholder="Enter the name"
	       title="This field insert the name of student who will appearn in next exam in december 5th this year." 
	       required="required"/>
	<input type="text"
	       value="100"
	       title="This is readonly field" 
	       readonly="readonly" />     
	       
	        <input type="text" disabled="disabled"/>
     <input type="submit" disabled="disabled"/>
      
       <input type="radio" checked="checked"/>
     <input type="checkbox" checked="checked"/>
  <select>
    <option>India</option>
    <option selected="selected">Japan</option>
    <option>UK</option>
    </select>
    <select size="4" multiple="multiple">
    <option>India</option>
    <option selected="selected">Japan</option>
    <option>UK</option>
    <option selected="selected">USA</option>
  </select>  
	<input type="submit" 
	       value="Validate" 
	       title="This button will validate user inpuut"/>
	<input type="submit" 
	       value="No Validate"
	       title="This button will submit data without validation"
	       formnovalidate="formnovalidate"/>
</form>
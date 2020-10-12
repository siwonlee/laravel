<?php


// $upcs = App\Models\Upc::where('verify', 2)
// ->paginate(10)    ;

//$cate = $_GET['cate'];
 

?>


@extends('layouts.admin')

@section('content')

 

<div class="px-3  py-2">
<div class="px-10 py-4  text-3xl inline"  > <i class="nav-icon fas fa-upload text-3xl" ></i> Add UPC </div>
</div>

<div class="px-3  py-2">
<div class="      alert alert-danger "  >  You MUST "Status Check" first and then fill out the rest of the fie </div>
</div>


 
<div class="px-3  py-2">
 
   <Table class=table>
        <tr>
            <td width=15%>UPC/PLU:</td>
            <td width=35%>
                <input type=text  class="form-control form-input rounded-md shadow-sm mt-1 block w-full"   style="font-size:20px;" id='upc1' name=query value=" "     > 
            </input>
            </td>
            
            <td width=15%>  <button type=submit class=" btn btn-danger btn-lg " id='status_btn' >Status Check</button></td> 
            <td width=35%> 

                <div id="status"  >



                </div>
            
            </td>
            </tr>
  
            
            <form action="upc_verify_addupc_include_post.php" id="sw1"   method="POST" enctype= "multipart/form-data">
                <input type=hidden name=upc value="$upc"></input>
                <input type=hidden name=staff value="$staff"></input>
                <input type=hidden name=add_date value="=>echo $date;"></input> 
            
        <tr>
            <td  width=15%>STATUS:</td>
            <td width=35%>
            
            
            <select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full"    name=approved   >
            <option selected  >Choose one </option>  
            <option value="Yes"  >Approved</option>
            <option value="no"    >Not Approved</option>
            <option value="Pending"  >Pending </option>
            </select>
            
            
            
            </td>
            <td></td><td></td>
            </tr>

            <tr  >
            <td  width=15%>CATEGORY:</td>
            <td width=35%><select onchange="showUser(this.value)" class="form-control form-input rounded-md shadow-sm mt-1 block w-full"   id="category1" name=cate    >
            <option selected    >Choose one </option>  
            <option value="2"   >02-Cheese or Tofu</option>
            <option value="3"   >03-Eggs</option>
            <option value="5"  >05-Breakfast Cereal </option>
            <option value="6"    >06-Legumes</option>
            <option value="8"    >08-Fish</option>
            <option value="9"    >09-Infant Cereal</option>
            <option value="12"   >12-Infant Fruits & Vegetables</option>
            <option value="13"    >13-Infant Meats</option>
            <option value="16"    >16-Bread/Whole Grains</option>
            <option value="19"    >19-Fruit & Vegetables Cash Value</option>
            
            <option value="21"    >21-Infant Formula (IF)</option>
            <option value="31"    >31-Exempt Infant Formula (EXF)</option>
            <option value="41"   >41-WIC Eligible Nutritionals</option>
            <option value="50"    >50-Yogurt</option>
            
            
            
            <option value="51"    >51-Milk-whole</option>
            <option value="52"   >52-Milk Low Fat/fat free</option>
            <option value="53"   >53-Juice-11.5 to 12oz</option>
            
            <option value="54"   >54-Juice-64oz</option>
                
                </select>
                </td>
            <td width=15%>SUBCATEGORY:</td>
            <td width=35%>
            
            
            
            <select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full"  id="txtHint" onchange="showUser1(this.value)" name=sub  >	</select>
            
            </td>
            <td></td>
            <td></td>
            </tr>
            
            <tr>
            <td   >BRAND NAME:</td>
            <td   ><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full" value=" " name=brand   }></input></td>
            <td></td>
            <td></td> 
            </tr>
            
            <tr>
            <td   >FOOD DESCRIPTION:</td>
            <td   COLSPAN=3><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full" value=" " name=description    ></input></td>
                <td></td>
            <td></td>
            </tr>
   
            <tr>
            <td   >SIZE:</td>
            <td   ><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full" value=" " name=size   ></input></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td   >UOM: </td>
            <td   > <select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full"  id="uom"  name=uom   >
            <option  VALUE="OZ" >OZ </option>  
            <option   VALUE="LB" >LB </option> 
            <option   VALUE="GAL" >GAL </option>  
            <option VALUE="CT" >CT </option>  
                
                </select></td>
                <td></td>
            <td></td>
            </tr>
            
            <tr>
            <td   >INGEDIENTS:</td>
            
            <td  colspan=3  > 
            
            <textarea rows="2"     form="sw1" class="form-control form-input rounded-md shadow-sm mt-1 block w-full" name=ingredients  >
                </textarea></td>
            
            
            
            </tr>
            
            <tr>
                <td   >IMAGES:</td>
                
                <td >
                
                
                
                
                <div class="input-group">
                                <span class="input-group-btn" style="display:inline;">
                                    <span class="btn btn-primary btn-file">
                                        Browse<input type="file" name="pic" accept="image/*"  >
                                    </span>
                                </span>
                                <input type="text" class="form-control form-input rounded-md shadow-sm mt-1 block w-full" readonly      >
                            </div>
                            Click "Browse", select the file, then click "Open". 
                            </td>
                <td colspan=2>
                
                
                
                
                
                </td>
            
            </TR>
            
  
  
   
   
            
            <tr>
            
                    <td colspan=4 style="text-align:center;" align=center>  
                
                    <button type=submit class=" btn btn-success btn-lg " data-toggle="tooltip" data-placement="right"  >Save</button> 
                </td>
            </tr>
  </table> 
  </form>
   
</div> 
   
 

  
 



@endsection




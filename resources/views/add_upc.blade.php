<?php


// $upcs = App\Models\Upc::where('verify', 2)
// ->paginate(10)    ;

//$cate = $_GET['cate'];
 
?>
 <?use Carbon\Carbon;?>

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
  
            
            <form action="{{route('add_upc_post')}}" id="sw1"   method="POST" enctype= "multipart/form-data">
                
                @csrf
                <input type=hidden name=upc value=""  id='hidden_upc'></input>
                <input name = "time"    type=hidden value=" {{Carbon::now()->format('Y-m-d')}}"   ></input>
                <input name = "staff"   type=hidden value="{{Auth::user()->name}} "   ></input>
 

            <tr  >
            <td  width=15%>CATEGORY:</td>
            <td width=35%><select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled"   id="category1" name=category  disabled  >
            <option selected    >Select one </option>  
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
            
            
            
            <select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled"  id="sub_category"   name=subcategory disabled >	</select>
            
            </td>
            <td></td>
            <td></td>
            </tr>
            
            <tr>
            <td   >BRAND NAME:</td>
            <td   ><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled" value=" " name=brand   disabled ></input></td>
            <td></td>
            <td></td> 
            </tr>
            
            <tr>
            <td   >FOOD DESCRIPTION:</td>
            <td   COLSPAN=3><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled" value=" " name=description disabled   ></input></td>
                <td></td>
            <td></td>
            </tr>
   
            <tr>
            <td   >SIZE:</td>
            <td   ><input type=text class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled" value=" " name=size disabled  ></input></td>
            <td></td>
            <td></td>
            </tr>
            <tr>
            <td   >UOM: </td>
            <td   >
                
                
                
                <select   class="form-control form-input rounded-md shadow-sm mt-1 block w-full disabled"  id="uom"  name=uom disabled  >
         
            


                    <option value=""   >Select one</option>
                        <option value="BAG"   >BAG_BAG</option>
            
             
                        <option value="CAN"   >CAN_CAN</option> 
                        <option value="CTR"   >CTR_CONTAINER</option>
            
                        <option value="DOZ"   >DOZ_DOZEN</option>
            
                        <option value="GAL"   >GAL_GALLON</option>
                        <option value="HGL"   >HGL_HALF GALLON</option>
             
                        <option value="LB"   >LB_POUND</option>
            
                        <option value="OZ"   >OZ_OZ</option>
                        <option value="PKG"   >PKG_PACKAGE</option>
            
                        <option value="QT"   >QT_QUART</option>
                        <option value="4PK"  >4PK_4 PACKAGES</option>
                        <option value="6PK"   >6PK_6 PACKAGES</option>
            
                        <option value="$$$"   >$$$_DOLLAR</option>
            
            
            
             
                        </select>




            
            
            </td>
                <td></td>
            <td></td>
            </tr>

   
<tr>
    <td   >INGREDIENTS &<br>
    NUTRITION LABEL:<br>
    
    <div class="panel panel-danger"  > 
    <div class="panel-heading" style="padding:5px;important!" >
    
      Image types +<br>pdf,doc containing the images
      
    </div>
    </div>
    
    
    
    
    </td>
    
    <td  >
     
                  
         <div class="input-group">
                 <input type="text" class="form-control" readonly   placeholder=" Ingredients"    >
                        <span class="btn btn-primary btn-file dis_button cursor-not-allowed opacity-50 " style="margin-left:5px;">
                            Browse<input type="file" name="pic1" accept=".gif, .jpg, .png, .doc, .pdf, .jpeg, .docx"     disabled class="disabled"    /> 
                        </span>
                 
                   
                </div>		
                
     <div class="input-group" style="margin-top:10px;">
                   <input type="text" class="form-control" readonly  placeholder=" Nutrition Label"  >
                        <span class="btn btn-primary btn-file dis_button cursor-not-allowed opacity-50" style="margin-left:5px;" >
                            Browse<input type="file" name="pic2" accept=".gif, .jpg, .png, .doc, .pdf, .jpeg, .docx"  disabled  class="disabled"   /> 
                        </span>
                
                   
                </div>			
                
                 <div    class='ui red label  '   ><div class='content'>The file name containing special characters like % or ' will not be uploaded.<br>Please remove the special characters before uploading it.</div></div> 
                </td>
     
     
     <td  ></td>
     
     
    
    </tr>
     
    
    <tr>
    
    
    
    
    
    
    
    <td   >PRODUCT IMAGE:<br>
    
    
    <div class="panel panel-danger"  > 
    <div class="panel-heading" style="padding:5px;important!" >
    
      Image types ONLY
      
    </div></div>
     
    
    
    
    </td>
    
    <td  >
     
     
     
     
     <div class="input-group">
                    
            <input type="text" class="form-control" readonly placeholder="Product Image"  >



                        <span class="btn btn-primary btn-file dis_button cursor-not-allowed opacity-50" style="margin-left:5px;">
                            Browse<input type="file" name="pic" accept="image/*"  disabled  class="disabled"    /> 
                        </span>
            
                   
                </div>
                
             
                
             
                </td>
     
               


            </tr>



 
 
  
   
   
            
            <tr>
            
                    <td colspan=4 style="text-align:center;" align=center>  
                
                    <button type=submit id="add_button" class=" bg-green-700 hover:bg-green-500 text-white py-2 px-4 rounded dis_button cursor-not-allowed opacity-50 disabled"  disabled >Add</button> 
                </td>
            </tr>
  </table> 
  </form>
   
</div> 
   
 
{{--  add list--}}

<div class="px-3 py-4 ">

    <table class="w-full text-md bg-white shadow-md rounded mb-4 table">
	<thead>
	            <tr>
                <td>Add-Date</td>
				   <td>Image</td>
                <td>UPC</td>
                <td>Brand</td>
                <td>Description</td>
                <td>Size/UOM</td>
             

            </tr>
	</thead>
	<tbody>
	
        <?

$staff = Auth::user()->name;  
 
$upcs = App\Models\Upc::where('add_staff',$staff )-> orderby('timestamp','desc')->paginate(10)    ;

 ?>

 @foreach($upcs as $c)



            <tr>
                <td> {{$c->add_date}}</td> 
				<td>
				
		 				
<?
if($c->pic ==''){echo "";}else{?>
	<a href="storage/upload_img/{{$c->pic}}" target="_blank"><img class="ui tiny image rounded" src="storage/upload_img/{{$c->pic}}"></a>
<?}?>

 		
				
				
				</td>
                <td>{{$c->upc}}</td>
                <td>{{$c->brand}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->size}}/{{$c->uom}}</td>
             

            </tr>



 @endforeach
 

 






 
		
	</tbody>
</table>

{{ $upcs->links() }}
</div>





  
 



@endsection




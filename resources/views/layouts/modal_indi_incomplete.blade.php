<?use Carbon\Carbon;?>

<tr>
	<td>{{$data1->upc}} </td>
	<td>{{$data1->brand}}  </td>
	<td>{{$data1->short_desc}}</td>
	<td>


		<?
  
  switch (true) {


case ($cnt >= 100 and $cnt < 200): 
echo "No subcategory";
$alt = 1;
break;

case ($cnt >= 200 and $cnt < 300):
echo "No category";
$alt = 2;
break;

case ($cnt >= 300 and $cnt < 400):
echo "No verify date";
$alt = 3;
break;

case ($cnt >= 400 and $cnt < 500):
echo "No end date";
$alt = 4;
break;

case ($cnt >= 500 and $cnt < 600):
echo "No benefit QT";$alt = 5;
break;

case ($cnt >= 600 and $cnt < 700):
echo "No PLU indicator";$alt = 6;
break;

case ($cnt >= 700 and $cnt < 800):
echo "No benefit UOM";$alt = 7;
break;

case ($cnt >= 800 and $cnt < 900):
echo "No Short description";$alt = 8;
break;

case ($cnt >= 900 and $cnt < 1000):
echo "No broad band";$alt = 9;
break;

case ($cnt >= 1000 and $cnt < 1100):
echo "No brand";$alt = 10;
break;

case ($cnt >= 1100 and $cnt < 1200):
echo "Incorrect length of UPC";$alt = 11;
break;

case ($cnt >= 1200 and $cnt < 1300):
echo "Not matching sub category";$alt = 12;
break;

case ($cnt >= 1300 and $cnt < 1400):
echo "Not matching sub category ";$alt = 13;
break;

case ($cnt >= 1400 and $cnt < 1500):
echo "Not matching sub category ";$alt = 14;
break;

case ($cnt >= 1500 and $cnt < 1600):
echo "Incorrect length of subcategory";$alt = 15;
break;

case ($cnt >= 1600 and $cnt < 1700):
echo "Incorrect length of category";$alt = 16;
break;

case ($cnt >= 1700 and $cnt < 1800):
echo "Not matching category";$alt = 17;
break;

case ($cnt >= 1800 and $cnt < 1900):
echo "Not matching category";$alt = 18;
break;

case ($cnt >= 1900 and $cnt < 2000):	
echo "No or wrong benefit UOM";$alt = 19;
break;



case ($cnt >= 2300 and $cnt < 2400):
echo "Different sub categories";$alt = 23;
break;

case ($cnt >= 2400 and $cnt < 2500):
echo "Wrong Broadband";$alt = 24;
break;

case ($cnt >= 2500 and $cnt < 2600):
echo "Wrong Broadband";$alt = 25;
break;

case ($cnt >= 2600 and $cnt < 2700):
echo "No or Wrong subcategory assigned ";$alt = 26;
break;


}
  
  
  ?>

 
<button class="btn btn-default btn-sm  ">
 
<span class="fa fa-edit" data-toggle="collapse" data-target="#in{{$cnt}}" title="Edit"  ></span>
</button>

</td>
</tr>
 

<form action="sw_upc_edit_incomplete.php">

	<input name = "id" class="form-control" type=hidden value="{{$data1->id}}"  />
	<input name = "time" class="form-control  "  type=hidden value=" {{Carbon::now()->format('Y-m-d')}}"  / >
<input name = "staff" class="form-control  "  type=hidden value="{{Auth::user()->name}} "  />

@csrf


<tr id="in{{$cnt}}" class="collapse">
<td colspan=4>


	<div class="well well-lg">
		<table class="table">
			<tr>
				<td width=200px>Upc</td>
				<td <?if($alt==11){echo"class=has-error";}?>><input name="upc" class="form-control"
						type=text value="{{$data1->upc}}"></input></td>
				<td>8,12 or 13 digits only, The current length :
					<?echo "<font color=red>".strlen($data1->upc)."</font>";?>
				</td>
			</tr>
			<tr>
				<td width=200px>Brand</td>
				<td <?if($alt==10){echo"class=has-error";}?>><input name="brand" class="form-control"
						type=text value="{{$data1->brand}}"></input>
				</td>
				<td></td>
			</tr>
			<tr>
				<td width=200px>Description</td>
				<td><input name="description" class="form-control" type=text
						value="{{$data1->description}}"></input></td>
				<td></td>
			</tr>


			<tr>
				<td width=200px>Short_desc</td>
				<td <?if($alt==8){echo"class=has-error";}?>><input id="<?=$cnt?>desc" name="short_desc1"
						maxlength=24 class="form-control" type=text value="{{$data1->short_desc}}"
						onkeyup=display_strlen<?=$cnt?>()></input></td>
				<td>limits up to 24 characters <font color=red><span id="<?=$cnt?>spit"></span> </font>
				</td>


			</tr>
			<script>
			function display_strlen<?=$cnt?>() {
				var x = document.getElementById("<?=$cnt?>desc").value.length;
				document.getElementById("<?=$cnt?>spit").innerHTML = x;
			}
			</script>


			<tr>
				<td width=200px>Category</td>
				<td <?if($alt==2 or $alt==16 or $alt==17 or $alt==18){echo"class=has-error";}?>>
					<input name="category" maxlength=2 class="form-control" type=text value="<?
						if($data1->category_full){

						echo  $data1->category_full;

						}else if(strlen($data1->category)==1){

						echo '0'.$data1->category; }else if(strlen($data1->category)==2){ echo $data1->category; } ?>"></input>
				</td>
				<td>2 characters, example : "02", verified : <font color=red> {{$data1->category}}</font>
				</td>
			</tr>

			<tr>
				<td width=200px>Sub_category</td>
				<td <?if($alt==1 or $alt==12 or $alt==13 or $alt==14 or $alt==15 or $alt==23 or
					$alt==26){echo"class=has-error";}?> >
					<input name="subcate" maxlength=3 class="form-control form-control-danger" type=text
						value="<?
							if($data1->subcat_full){

							echo  $data1->subcat_full;

							}else if(strlen($data1->subcategory)==1){

							echo '00'.$data1->subcategory; }else if(strlen($data1->subcategory)==2){ echo '0'.$data1->subcategory; } ?>"></input>
				</td>
				<td>3 characters, example : "002" , verified : <font color=red> {{$data1->subcategory}}
					</font>
				</td>
			</tr>
 

			<tr>
				<td width=200px>Benefit UOM</td>
				<td <?if($alt==7 or $alt==19){echo"class=has-error";}?> >
					<select name="benefit_uom_wow" maxlength=3 class="form-control">
						<option <?if ($data1->benefit_uom_wow=='' ){echo "selected" ;}?> value="">Select
							One
						</option>
						<option <?if ($data1->benefit_uom_wow=='$$$' ){echo "selected" ;}?>
							value="$$$">$$$
						</option>
						<option <?if ($data1->benefit_uom_wow=='BAG'){echo "selected" ;}?> value="BAG">BAG
						</option>
						<option <?if ($data1->benefit_uom_wow=='CAN'){echo "selected" ;}?> value="CAN">CAN
						</option>

						<option <?if ($data1->benefit_uom_wow=='CBL'){echo "selected" ;}?> value="CBL">CBL
						</option>
						<option <?if ($data1->benefit_uom_wow=='CTR'){echo "selected" ;}?> value="CTR">CTR
						</option>

						<option <?if ($data1->benefit_uom_wow=='DOZ'){echo "selected" ;}?> value="DOZ">DOZ
						</option>
						<option <?if ($data1->benefit_uom_wow=='GAL'){echo "selected" ;}?> value="GAL">GAL
						</option>

						<option <?if ($data1->benefit_uom_wow=='HGL'){echo "selected" ;}?> value="HGL">HGL
						</option>


						<option <?if ($data1->benefit_uom_wow=='JBG'){echo "selected" ;}?> value="JBG">JBG
						</option>
						<option <?if ($data1->benefit_uom_wow=='LB'){echo "selected" ;}?> value="LB">LB
						</option>

						<option <?if ($data1->benefit_uom_wow=='OZ'){echo "selected" ;}?> value="OZ">OZ
						</option>
						<option <?if ($data1->benefit_uom_wow=='PKG'){echo "selected" ;}?> value="PKG">PKG
						</option>
						<option <?if ($data1->benefit_uom_wow=='QT'){echo "selected" ;}?> value="QT">QT
						</option>



					</select>
				</td>
				<td>$$$,BAG,CAN,CBL,CTR,DOZ,GAL,HGL,JBG,LB,OZ,PKG,QT only </td>
			</tr>
			<tr>
				<td width=200px>Effective Date</td>
				<td <?if($alt==3){echo"class=has-error";}?>><input name="verify_date" class="form-control"
						type=text value="{{$data1->verify_date}}"></input></td>
				<td>YYYY-MM-DD, example : "2017-01-31"</td>
			</tr>
			<tr>
				<td width=200px>End Date</td>
				<td <?if($alt==4){echo"class=has-error";}?>><input name="end_date" class="form-control"
						type=text value="<?if($data1->end_date){echo $data1->end_date;}else{echo "
						2024-12-31";} ?>"></input></td>
				<td>"2024-12-31" if it is an approved item.</td>
			</tr>
			<tr>
				<td width=200px>Benefit QT</td>
				<td <?if($alt==5){echo"class=has-error";}?>><input name="benefit_qt" class="form-control"
						type=text value="{{$data1->benefit_qt}}"></input></td>
				<td> The issued QTY deducting unit</td>
			</tr>
			<tr>
				<td width=200px>PLU Indicator</td>
				<td <?if($alt==6){echo"class=has-error";}?>>
					<label class="radio-inline"><input type="radio" name="plu_indicator" value="P" <?if
							($data1->plu_indicator=='P' or strlen($data1->upc)==4 or
							strlen($data1->upc)==5){echo "checked" ;}?>>P : PLU</label>
					<label class="radio-inline"><input type="radio" name="plu_indicator" value="U" <?if
							($data1->plu_indicator=='U' or strlen($data1->upc)==12 or
							strlen($data1->upc)==13){echo "checked" ;}?>>U : UPC</label>




				</td>

				<td>P : PLU, U : UPC </td>
			</tr>
			<tr>
				<td width=200px>Broad Band</td>
				<td <?if($alt==9 or $alt==24 or $alt==25){echo"class=has-error";}?>>

					<label class="radio-inline"><input type="radio" name="broadband_flag" value="0" <?if
							($data1->broadband_flag==0){echo "checked" ;}?>>No : 0</label><label
						class="radio-inline"><input type="radio" name="broadband_flag" value="1" <?if
							($data1->broadband_flag==1){echo "checked" ;}?>>Yes : 1</label>




				</td>

				<td>1: 2-0,1,2,3 | 3-0,1 | 5-0,1,2 | 8-0,1,2,3 | 9-0,1 | 12-0,1,2,3 |13-0,1 |
					16-0,1,2,3,7,8
					| | 19-0,1,2,3 | 51-0,1 | 52-0,1 | 53-0,1 | 54-0,2<br>
					0: 2-4 | 6-1,2,3 | 51-3,6,9,11,201,202 |
					52-4,6,9,11,12,14,19,22,25,27,201,202,203,204,205 | 53-5</td>
			</tr>
			<tr>
				<td width=200px>High Cost</td>
				<td>


					<label class="radio-inline"><input type="radio" name="high_cost" value="0" <?if
							($data1->high_cost==0 or $data1->high_cost=='' ){echo "checked"
							;}?>>0:Non-High
						Cost</label><label class="radio-inline"><input type="radio" name="high_cost"
							value="1" <?if ($data1->high_cost==1){echo "checked" ;}?>>1:High Cost</label>

				</td>

				<td>0:Non-High Cost, 1:High Cost</td>
			</tr>
			<tr>
				<td colspan=3 align=center>
					<button class="btn btn-success btn-sm" type=submit>Submit</button>
				</td>
			</tr>
		</table>

	</div>
</td>
</tr>

</form>

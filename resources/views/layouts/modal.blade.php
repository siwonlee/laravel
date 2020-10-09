  <!-- Modal -->
{{-- <div class="modal fade" id="edit{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> --}}




     <!-- Modal -->
  <div class="modal fade" id="edit{{$c->id}}" role="dialog">
    <div class="modal-dialog">

			  <!-- Modal content-->
			  <div class="modal-content">
						<div class="modal-header" >
						  <button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
				<div class="modal-body">
		 <p>

		<style>

		.fileUpload {
    position: relative;
    overflow: hidden;
	display:inline;

}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;

    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}




		</style>

	    <form action="upload_img.php" method="post" enctype="multipart/form-data" class="form-inline">

			<div class="form-group row">
	<div class="control-label col-md-3 col-sm-3 col-xs-3" ></div>



			<div class="col-md-9 col-sm-9 col-xs-9">


<div class="fileUpload btn btn-primary">
    <span>Browse</span>
    <input id="uploadBtn" type="file" class="upload" name="fileToUpload"   />
</div>
	<div class="fileUpload btn btn-danger">
    <span>submit</span>
    <input type="submit"    class="upload" />
</div>

     		<input id="uploadFile" placeholder="Choose File" class="fileUpload" disabled="disabled" />




			</div>

			</div>



</form>





















		 <form action="sw_upc_edit.php"  id="modal-form-sw">
			   <input name = "no" class="form-control" type=hidden value="{{$c->no}}"  ></input>
			 <!-- <input name = "upc" class="form-control" type=hidden value="{{$c->upc}}"  ></input> -->










			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="image">Image


			</label>


			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "image" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->image}}"  ></input>
			</div>

			</div>

<!--
			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="image">Image2




			</label>


			<div class="col-md-9 col-sm-9 col-xs-9">

			 			<form   action="upload_img.php" method="post" enctype="multipart/form-data"  >

        <input class="btn btn-xs" type="file" name="fileToUpload" id="fileToUpload" style="display:inline;"></input><input class="btn btn-xs" type="submit" value="Upload Image" name="submit"></input>

</form>



			</div>

			</div>

-->
			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3"for="a1">Status</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name="a1"class="form-control col-md-9 col-sm-9 col-xs-9"  value="{{$c->approved}}" type=text readonly></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="a2">Staff</label>
			<div class="col-md-9 col-sm-9 col-xs-9"><input name="a2"class="form-control col-md-9 col-sm-9 col-xs-9"  value="{{$c->verify_staff}}"type=text readonly></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="upc">UPC</label>
			<div class="col-md-9 col-sm-9 col-xs-9"><input name = "upc" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->upc}}" readonly></input>
			</div></div>



			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="category">Category</label>
			<div class="col-md-9 col-sm-9 col-xs-9"><input name = "category" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->category}}"  ></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="subcategory"> Subcategory</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "subcategory" class="form-control col-md-9 col-sm-9 col-xs-9"    type=text value="{{$c->subcategory}}"  ></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="brand">Brand</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "brand" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->brand}}"></input>
			</div></div>




			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="description"> description</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "description" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->description}}" ></input>
			</div></div>
<!--
			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="long_desc"> Long Description</label>
			<div class="col-md-9 col-sm-9 col-xs-9">-->
			<input name = "long_desc" class="form-control col-md-9 col-sm-9 col-xs-9"  type=hidden value="{{$c->long_desc}}" ></input>
<!--			</div></div>
-->
			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="short_desc"> Short Description</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "short_desc" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->short_desc}}" id="input-1" ></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="size"> size</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "size" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->size}}" size=2></input>
			 </div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="uom"> UOM</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "uom" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->uom}}" size=2></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="high_cost"> High Cost Item</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
					 <select   class="form-control col-md-9 col-sm-9 col-xs-9"   name=high_cost style="font-size:13px; font-family:FontAwesome; "    >

							<option value="0" <?if($c->high_cost==0){echo 'selected';}?> >NO HC</option>
							<option value="1" <?if($c->high_cost==1){echo 'selected';}?> >HC</option>


								 </select>
							 </div> </div>


			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="ingredients"> ingredients</label>
			<div class="col-md-9 col-sm-9 col-xs-9">
			<textarea  name = "ingredients" style="height:100px;" class="form-control col-md-9 col-sm-9 col-xs-9"   >{{$c->ingredients}}</textarea>
			</div></div>

			 <div class="form-group row">
			 <label class="control-label col-md-3 col-sm-3 col-xs-3" for="nutrition"> Nutrition</label>
			 <div class="col-md-9 col-sm-9 col-xs-9">
			 <textarea name = "nutrition" style="height:100px;"class="form-control col-md-9 col-sm-9 col-xs-9"    >{{$c->nutrition}}</textarea>
			 </div> </div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="benefit_qt"> Benefit QT</label>
			  <div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "benefit_qt" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->benefit_qt}}"  ></input>
			</div></div>

			<div class="form-group row">
			<label class="control-label col-md-3 col-sm-3 col-xs-3" for="benefit_uom_wow"> UOM for WOW</label>
			   <div class="col-md-9 col-sm-9 col-xs-9">
			<input name = "benefit_uom_wow" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->benefit_uom_wow}}" placeholder="Benefit UOM"  ></input>
			 <small>JBG,BAG,CBL,OZ,DOZ,GAL,QT,HGL,LB,$$$,CAN,PKG,BAG,CTR only </small>
			 </div></div>


			<div class="form-group row">
			  <label class="control-label col-md-3 col-sm-3 col-xs-3" for="comment"> Comment</label>
			   <div class="col-md-9 col-sm-9 col-xs-9">
			  <input name = "comment" class="form-control col-md-9 col-sm-9 col-xs-9"  type=text value="{{$c->comment}}"></input>
			</div></div>


						<div align=center style="margin-top:10px;">
						 <button class="btn btn-success btn-sm"  type=submit >Submit</button>
						 </div>


						</form>








		</p>
				</div>

				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>


			  </div>

    </div>
  </div>









</div>

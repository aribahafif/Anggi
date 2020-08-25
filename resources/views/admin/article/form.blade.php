<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
                
            {!! Form::myInput('text', 'title', 'TItle') !!}

            <div class='form-group'>
                <label for="image">Image* (Max Size 2 Mb)</label><br>
                <input type='file' name="image" onchange="readURL(this);" />
            </div>

            {!! !empty($item->image) ? '<img id="preview" src="'.asset($item->image).'"  width="300px" /><br><br>' : '<img id="preview" src="https://via.placeholder.com/300x250?text=NO%20IMAGE" width="300px" /><br><br>' !!}

            {!! Form::label('desc', 'Description') !!}<br>
            {!! Form::textarea('description', null,['id' => 'desc', 'cols' => '90%']) !!}<br><br>

		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function () {
  		bsCustomFileInput.init()
	})
</script>
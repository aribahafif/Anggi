<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
            
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ !empty($item->kode) ? $item->kode : 'G-'.$kode}}" readonly>
            </div>
            
            {!! Form::myInput('text', 'name', 'Gejala') !!}

		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function () {
  		bsCustomFileInput.init()
	})
</script>

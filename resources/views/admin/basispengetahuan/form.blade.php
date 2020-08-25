<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
            
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ !empty($item->kode) ? $item->kode : 'B-'.$kode}}" readonly>
            </div>


            {!! Form::mySelect('id_gejala', 'Gejala', $gejala, null, ['class' => 'form-control']) !!}
            
            {!! Form::mySelect('id_penyakit', 'Penyakit', $penyakit, null, ['class' => 'form-control']) !!}
            
            {!! Form::myInput('text', 'mb', 'Nilai MB') !!}
            
            {!! Form::myInput('text', 'md', 'Nilai MD') !!}

		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function () {
  		bsCustomFileInput.init()
	})
</script>
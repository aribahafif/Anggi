<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">

            {!! Form::myInput('text', 'question', 'Pertanyaan') !!}
            
            {!! Form::label('answer', 'Jawaban') !!}<br>
            {!! Form::textarea('answer', null, ['id' => 'answer', 'rows' => 4, 'cols' => 100]) !!}

		</div>
	</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
	$(document).ready(function () {
  		bsCustomFileInput.init()
	})
</script>
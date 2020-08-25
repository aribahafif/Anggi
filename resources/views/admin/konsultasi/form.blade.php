<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">

            <input name="id" type="hidden" value="{{$id}}">

            {!! Form::myInput('text', 'nama', 'Nama') !!}

            {!! Form::label('ttl', 'Tanggal Lahir') !!}
            {!! Form::date('ttl', null,['class' => 'form-control']) !!}
            @if(!empty($msgUmur))
                <span class="text-danger">{{ $msgUmur }}</span><br>
            @endif
            <br>
            {!! Form::label('tb', 'Tinggi Badan (cm)') !!}<br>
            {!! Form::number('tb', 'Tinggi Badan') !!}<br><br>

            {!! Form::label('bb', 'Berat Badan (kg)') !!}<br>
            {!! Form::number('bb', 'Berat Badan') !!}<br><br>

            {!! Form::label('gejala', 'Silahkan pilih gejala yang dialami') !!}

            <div class="row mB-40">
                <div class="col-md-4">
                @php $i=0; @endphp
                @foreach($gejala as $g)
                    @if($i < $jmlgejala)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}">
                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                        </div>
                        @php $i++; @endphp
                    @else
                    </div>
                    <div class="col-md-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}">
                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                        </div>
                        @php $i=1; @endphp
                    @endif
                @endforeach
                </div>
            </div>

		</div>
	</div>
</div>

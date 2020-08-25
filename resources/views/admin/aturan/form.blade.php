<div class="row mB-40">
	<div class="col-sm-12">
		<div class="bgc-white p-20 bd">
            
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ !empty($item->kode) ? $item->kode : 'A-'.$kode}}" readonly>
            </div>
            
            {!! Form::label('gejala', 'Gejala') !!}
            
            <div class="row mB-40">
                <div class="col-md-4">
                @php $i=0; @endphp                         
                @foreach($gejala as $g)
                    @if($i < $jmlgejala)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}" {{ !empty($selection) ? in_array($g->id, $selection) ? ' checked' : ''  : ''}}>
                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                        </div>
                        @php $i++; @endphp 
                    @else
                    </div>
                    <div class="col-md-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="g{{$g->id}}" name="gejala[]" value="{{$g->id}}" {{ !empty($selection) ? in_array($g->id, $selection) ? ' checked' : ''  : ''}}>
                            <label class="custom-control-label" for="g{{$g->id}}">{{$g->name}}</label>
                        </div>
                        @php $i=1; @endphp  
                    @endif
                @endforeach
                </div>
            </div>

            
            {!! Form::mySelect('id_penyakit', 'Penyakit', $penyakit, null, ['class' => 'form-control'])!!}

		</div>
	</div>
</div>
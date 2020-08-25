@extends('web.layouts.app')

@section('title','FAQ')

@section('body')

<!-- banner -->
<section class="inner-banner">
	<div class="container">
	</div>
</section>
<!-- //banner -->

<!-- faq -->
<section class="faq py-5">
	<div class="container py-md-3">
		<div class="heading">
			<h3 class="head text-center">Frequently asked questions</h3>
			<p class="my-3 head text-center"> Berisi tentang pertanyaan-pertanyaan dan jawaban yang sering ditanyakan berkaitan dengan topik diagnosa penyakit THT (Telinga, Hidung dan Tenggorokoan).</p>
		</div>
		<div class="row">				
			<div class="col-md-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach($faq as $i => $item)
                        @if($i==0)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$item->id}}" aria-expanded="true" aria-controls="collapse-{{$item->id}}">
                                        {{$item->question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{$item->id}}" class="panel-collapse collapse in collapse show" role="tabpanel" aria-labelledby="collapse-{{$item->id}}">
                                <div class="panel-body">
                                    <p>{{$item->answer}}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$item->id}}" aria-expanded="false" aria-controls="collapse-{{$item->id}}">
                                        {{$item->question}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{$item->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapse-{{$item->id}}">
                                <div class="panel-body">
                                    <p>{{$item->answer}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @php $i++; @endphp
                    @endforeach
				</div>
			</div><!--- END COL -->		
		</div><!--- END ROW -->	
	</div>
</section>
<!-- //faq -->

@endsection
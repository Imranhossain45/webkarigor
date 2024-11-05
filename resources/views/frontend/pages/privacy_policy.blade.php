@extends('layouts.frontend.master', ['title' => $metaData->title ?? env('APP_NAME'), 'description' => $metaData->description ?? env('APP_NAME')])
@section('content')
  <section class="bradcrum_sec_pad">
    <div class="page-title text-center"
      style="background: url('{{ $generalInfo->bradcrum_photo }}') no-repeat left center #ffe9e6; background-size:cover !important">
      <div class="contact_tag1 text-center text-bold">Privacy Policy</div>
      <hr class="hr_for_all">
    </div>
  </section>
  <section class="page_sec_pad_50 page_res_mar">
    <div class="container">
      <div class="row">
        <div class="block">
          <h3 class="text-center">Our Privacy Policy Here</h3>
          <div class="mt-3">
            {!! $privacy->privacy !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

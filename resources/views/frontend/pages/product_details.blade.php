@extends('layouts.frontend.master', ['title' => $metaData->title ?? env('APP_NAME'), 'description' => $metaData->description ?? env('APP_NAME')])
@php
    $features = explode(';', $product->feature);
@endphp
@section('content')
    <section class="bradcrum_sec_pad">
        <div class="page-title text-center"
            style="background: url('{{ $generalInfo->bradcrum_photo }}') no-repeat left center #ffe9e6">
            <div class="contact_tag1 text-center text-bold">{{ $product->name }}</div>
            <hr class="hr_for_all">

        </div>
    </section>

    <section class="page_sec_pad_50 bg_soft">
        <div class="container">
            <div class="block">
                {{-- <div class="row">
                    <div class="col-lg-4">
                        <div>
                            <img src="{{ $product->thumbnail }}" class="w-100" alt="{{ $product->title }}">
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                            <div class="product_title mt_10_res">
                                <h2>{{ $product->name }}</h2>
                                {{ $product->feature }}
                            </div>
                    </div>

                </div> --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_description">
                            {!! $product->description !!}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection

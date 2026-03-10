@extends('layouts.app')

@section('content')
@foreach($page->blocks as $block)
    @switch($block->type)
        @case('hero')
            <section class="hero" style="background-image: url('{{ asset('storage/' . ($block->content['bg_image'] ?? '')) }}');">
                <div class="container text-center">
                    <h1>{{ $block->content['title'] ?? $page->title }}</h1>
                    <p>{{ $block->content['subtitle'] ?? '' }}</p>
                </div>
            </section>
            @break
        
        @case('text')
            <section style="padding: 60px 0;">
                <div class="container" style="max-width: 800px;">
                    {!! $block->content['body'] ?? '' !!}
                </div>
            </section>
            @break

        @case('cta')
            <section style="padding: 60px 0; background: var(--primary-color); color: white; text-align: center;">
                <div class="container">
                    <h3>{{ $block->content['title'] ?? 'Need Help?' }}</h3>
                    <p style="margin-bottom: 20px;">{{ $block->content['text'] ?? '' }}</p>
                    <a href="{{ $block->content['btn_link'] ?? '/contact' }}" class="btn btn-primary">{{ $block->content['btn_text'] ?? 'Contact Us' }}</a>
                </div>
            </section>
            @break
    @endswitch
@endforeach
@endsection

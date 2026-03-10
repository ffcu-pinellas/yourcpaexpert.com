@extends('layouts.app')

@section('content')
@foreach($page->blocks as $block)
    @switch($block->type)
        @case('hero')
            <section class="fl-banner" style="background-image: url('{{ asset('images/findlaw_banner_hero.png') }}'); padding: 60px 0; min-height: 250px;">
                <div class="fl-banner__content text-center">
                    <h1 class="fl-banner__text-main" style="font-size: 3rem;">{{ $block->content['title'] ?? $page->title }}</h1>
                    <p class="fl-banner__text-secondary">{{ $block->content['subtitle'] ?? '' }}</p>
                </div>
            </section>
            @break
        
        @case('text')
            <section class="fl-section-padding">
                <div class="fl-container" style="max-width: 850px; line-height: 1.8; color: #444; font-size: 1.1rem;">
                    {!! $block->content['body'] ?? '' !!}
                </div>
            </section>
            @break

        @case('cta')
            <section style="padding: 60px 0; background: #002D5B; color: white; text-align: center;">
                <div class="fl-container">
                    <h3 style="font-size: 2rem; margin-bottom: 20px;">{{ $block->content['title'] ?? 'Need Specialized Counsel?' }}</h3>
                    <p style="margin-bottom: 30px; opacity: 0.9; max-width: 700px; margin-left: auto; margin-right: auto;">{{ $block->content['text'] ?? 'Consult with our JD/CPA experts for complex tax and legal matters.' }}</p>
                    <a href="{{ $block->content['btn_link'] ?? '/contact' }}" class="fl-btn-primary" style="background: #FA6400; border: none; padding: 18px 40px; border-radius: 4px; font-weight: 800; text-transform: uppercase;">{{ $block->content['btn_text'] ?? 'Get a Free Review' }}</a>
                </div>
            </section>
            @break
    @endswitch
@endforeach
@endsection

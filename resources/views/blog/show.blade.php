@extends('layouts.app')

@section('content')
<section style="padding: 60px 0;">
    <div class="container" style="max-width: 800px;">
        <article>
            <h1 style="font-size: 2.5rem; margin-bottom: 20px;">{{ $post->title }}</h1>
            
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); padding: 15px 0;">
                <div style="width: 50px; height: 50px; background: #eee; border-radius: 50%;">
                    @if($post->author && $post->author->photo)
                        <img src="{{ asset('storage/' . $post->author->photo) }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                    @endif
                </div>
                <div>
                    <div style="font-weight: 600;">{{ $post->author->name ?? 'Admin' }}</div>
                    <div style="font-size: 0.8rem; color: #999;">Published on {{ $post->created_at->format('M d, Y') }}</div>
                </div>
            </div>

            @if($post->featured_image)
                <img src="{{ asset('storage/' . $post->featured_image) }}" style="width: 100%; border-radius: 10px; margin-bottom: 30px;">
            @endif

            <div class="blog-content" style="font-size: 1.1rem; line-height: 1.8;">
                {!! $post->content !!}
            </div>
            
            <div style="margin-top: 50px; padding: 30px; background: var(--light-bg); border-radius: 10px; text-align: center;">
                <h3>Need professional advice on this topic?</h3>
                <p style="margin: 15px 0;">Contact our experts today for a personalized consultation.</p>
                <a href="/contact" class="btn btn-primary">Book Consultation</a>
            </div>
        </article>
    </div>
</section>
@endsection

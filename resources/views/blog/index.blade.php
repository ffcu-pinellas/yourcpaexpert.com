@extends('layouts.app')

@section('content')
<section class="hero" style="padding: 60px 0; background: var(--bg-color); color: var(--text-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <h1>Resource Center</h1>
        <p style="color: var(--muted-text);">Expert insights into complex legal and tax topics.</p>
    </div>
</section>

<section style="padding: 80px 0;">
    <div class="container" style="max-width: 900px;">
        @forelse($posts as $post)
            <article style="margin-bottom: 60px; border-bottom: 1px solid var(--border-color); padding-bottom: 40px;">
                @if($post->featured_image)
                    <img src="{{ asset('storage/' . $post->featured_image) }}" style="width: 100%; border-radius: 10px; margin-bottom: 20px;">
                @endif
                <h2 style="margin-bottom: 10px;">{{ $post->title }}</h2>
                <div style="font-size: 0.9rem; color: #999; margin-bottom: 20px;">
                    <span>By {{ $post->author->name ?? 'Admin' }}</span> | <span>{{ $post->created_at->format('M d, Y') }}</span>
                </div>
                <p style="color: var(--muted-text); margin-bottom: 20px;">{{ Str::limit(strip_tags($post->content), 200) }}</p>
                <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-primary">Read Article &rarr;</a>
            </article>
        @empty
            <div style="text-align: center; color: #999;">
                <i class="far fa-eye fa-3x" style="margin-bottom: 20px;"></i>
                <p>No resources found. Check back soon!</p>
            </div>
        @endforelse

        {{ $posts->links() }}
    </div>
</section>
@endsection

@extends('layouts.master')


<x-navigation>

</x-navigation>
<div class="page page_blog">

    <section class="blog articles">
        <div class="container">
            <div class="text-center">
                <h2>Blog</h2>
            </div>
            @include('partials.blog-section')

            <div class=" text-center">
                {{-- @if ($currentPage > 1)
                    <a href="{{ url('blog?page=' . ($currentPage - 1)) }}">« New Articles</a>
                @endif
                @if ($currentPage < $totalPages)
                    <a href="{{ url('blog?page=' . ($currentPage + 1)) }}">Older Articles »</a>
                @endif --}}
                {{-- {{ $posts->links() }} --}}

            </div>
</section>
</div>

@extends('layouts.master')

@section('title', 'Blog Post | CrossfitBox')

@section('single-post')
    <div class="page about single-post single">
        <section class="about_cont">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <img src="{{ $post->image }}" class="img-responsive" alt="">
                        <h4>{{ $post->title }}</h4>
                        {{-- Rich text editor content.
                        The `{!! !!}` syntax tells Laravel not to escape the HTML tags and to render them as they are. --}}
                        {!! $post->content !!}
                        {{-- Rich text editor content --}}
                    </div>
                    <!-- Sidebar column -->
                    <div class="col-md-2">
                        @auth
                            <div class="aside">
                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn-edit text-capitalize">
                                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="Edit / Edit_Pencil_Line_01">
                                            <path id="Vector"
                                                d="M4 20.0001H20M4 20.0001V16.0001L12 8.00012M4 20.0001L8 20.0001L16 12.0001M12 8.00012L14.8686 5.13146L14.8704 5.12976C15.2652 4.73488 15.463 4.53709 15.691 4.46301C15.8919 4.39775 16.1082 4.39775 16.3091 4.46301C16.5369 4.53704 16.7345 4.7346 17.1288 5.12892L18.8686 6.86872C19.2646 7.26474 19.4627 7.46284 19.5369 7.69117C19.6022 7.89201 19.6021 8.10835 19.5369 8.3092C19.4628 8.53736 19.265 8.73516 18.8695 9.13061L18.8686 9.13146L16 12.0001M12 8.00012L16 12.0001"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>
                                    Edit Post
                                </a>
                                <form action="{{ route('post.destroy', $post->id) }}" method="POST" id="delete-btn">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-edit text-capitalize" onclick="confirmDelete(event)">

                                        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                        <svg fill="#000000" width="800px" height="800px" viewBox="-3.5 0 19 19"
                                            xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg">
                                            <path
                                                d="M11.383 13.644A1.03 1.03 0 0 1 9.928 15.1L6 11.172 2.072 15.1a1.03 1.03 0 1 1-1.455-1.456l3.928-3.928L.617 5.79a1.03 1.03 0 1 1 1.455-1.456L6 8.261l3.928-3.928a1.03 1.03 0 0 1 1.455 1.456L7.455 9.716z" />
                                        </svg>
                                        Delete Post
                                    </button>
                                </form>
                            </div>
                        @endauth
                    </div>
                    <!-- Sidebar column -->
                </div>
            </div>
        </section>
        <!-- Article Section -->
        <section class="articles">
            <div class="text-center">
                <h2>Other Articles</h2>
            </div>
            <div class="container">
                @include('partials.blog-section')
            </div>
        </section>
        <!-- Article Section -->
    </div>

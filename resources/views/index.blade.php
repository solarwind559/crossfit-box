@extends('layouts.master')

@section('title', 'Blog | CrossfitBox')

<div class="page page_blog">

    <section class="blog articles">
        <div class="container">
            @if (session('deleted'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session('deleted') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            </div>
        @endif

            <div class="text-center">
                <h2>Blog</h2>
            </div>
            @include('partials.blog-section')
    </section>
</div>

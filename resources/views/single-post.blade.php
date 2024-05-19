@extends('layouts.master')

<x-navigation>

</x-navigation>

@section('single-post')
<div class="page about single-post">
    <section class="about_cont">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ url($post->image) }}" class="img-responsive" alt="">
                    <h4>{{ $post->title }}</span></h4>
                    <p>{{ $post->content }}</p>

                    </div>
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

      </section>
      <!-- Article Section -->
    </div>
<div class="page single-post">

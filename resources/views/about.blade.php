@extends('layouts.master')


<x-navigation>

</x-navigation>

@section('about')

<div class="page about">
    <section class="about_cont">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{  asset('build/assets/img/big_img.jpg') }}" class="img-responsive" alt="">
                    <h4>Swimming and the CrossFit Games:<span>Why Is It Everyone's Weak Link?</span></h4>
                    <p>A look at the effect of moderate alcohol consumption on fitness and health.</p>
                    <p>A few years ago I stopped drinking alcohol Sunday through Thursday.</p>
                    <p>I’ve never been a heavy drinker, so it wasn’t a difficult transition. For me, two drinks is letting loose and three is really getting wild, but a few nights a week I’d have a beer or glass of wine while making dinner. Once I started CrossFit, I wondered about the impact of those five or six drinks per week on my health and performance in the gym.</p>
                    <p>It turns out my years of partial abstinence may have been pointless. More and more studies suggest moderate alcohol consumption can improve cardiovascular health, and recent research suggests a few drinks have no negative impact on athletic performance. Still, alcohol has significant effects on the body, especially when consumed in excess.</p>
                    <img src="{{  asset('build/assets/img/big_img2.jpg') }}" class="img-responsive" alt="">
                    <p>A look at the effect of moderate alcohol consumption on fitness and health.</p>
                    <p>A few years ago I stopped drinking alcohol Sunday through Thursday.</p>
                    <p>I’ve never been a heavy drinker, so it wasn’t a difficult transition. For me, two drinks is letting loose and three is really getting wild, but a few nights a week I’d have a beer or glass of wine while making dinner. Once I started CrossFit, I wondered about the impact of those five or six drinks per week on my health and performance in the gym.</p>
                    <p>It turns out my years of partial abstinence may have been pointless. More and more studies suggest moderate alcohol consumption can improve cardiovascular health, and recent research suggests a few drinks have no negative impact on athletic performance. Still, alcohol has significant effects on the body, especially when consumed in excess.</p>
                </div>
            </div>
        </div>
      </section>
      <!-- Article Section -->
      <section class="articles">
          <div class="text-center">
              <h2>interesting articles</h2>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <div class="image">
                          <img src="{{  asset('build/assets/img/image1.png') }}" class="img-responsive" alt="" />
                          <a href="#">Swimming and the CrossFit Games: Why Is It Everyone's Weak Link?</a>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="image">
                          <img src="{{  asset('build/assets/img/image12.jpg') }}" class="img-responsive" alt="" />
                          <a href="#">A Movie in the Park:<br />Kung Fu Panda</a>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="image">
                          <img src="{{  asset('build/assets/img/image11.jpg') }}" class="img-responsive" alt="" />
                          <a href="#">A Movie in the Park:<br />Kung Fu Panda</a>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-8">
                      <div class="image">
                          <img src="{{  asset('build/assets/img/image2.png') }}" class="img-responsive" alt="" />
                          <a href="#">A Movie in the Park:<br />Kung Fu Panda</a>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="image">
                          <img src="{{  asset('build/assets/img/image13.jpg') }}" class="img-responsive" alt="" />
                          <a href="#">A Movie in the Park:<br />Kung Fu Panda</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="buttons text-center">
              <a href="#" class="">&laquo;New Articles</a>
              <a href="#">Older Articles&raquo;</a>
          </div>
      </section>
      <!-- Article Section -->
    </div>
@endsection

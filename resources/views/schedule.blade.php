@extends('layouts.master')


<x-navigation>

</x-navigation>

@section('schedule')

<div class="page page_schedule">
    <!-- About SECTION -->
	<!-- SCHEDULE SECTION -->
    <section class="schedule schedule-page">
        <div class="text-center">
            <h2>schedule</h2>
        </div>
        <div class="buttons text-center">
            <a href="#" id="choice-all" class="btn btn-primary btn-xl">ALL</a>
            <a href="#" id="choice-group" class="btn btn-primary btn-xl">GROUP classes</a>
            <a href="#" id="choice-kid" class="btn btn-primary btn-xl">kid classes</a>
            {{-- <a href="#" id="choice-personal" class="btn btn-primary btn-xl">personal trainers</a> --}}
            <a href="#" id="choice-outdoor" class="btn btn-primary btn-xl">outdoor classes</a>
        </div>
        <div class="container">
            <table class="table">
              <thead class="hidden-xs">
                <tr>
                  <th></th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                  <th>Saturday</th>
                  <th>Sunday</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">7:00 - 7:55</th>
                  <td><div class="group">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="personal">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="personal">cycling <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">boxing <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">cycling <span>7:00 - 7:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">8:00 - 8:55</th>
                  <td><div class="personal">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">boxing <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">cycling <span>7:00 - 7:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">9:00 - 9:55</th>
                  <td><div class="personal">pilates <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">boxing <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">cycling <span>7:00 - 7:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">10:00 - 10:55</th>
                  <td><div class="outdoor">cycling <span>7:00 - 7:55</span></div></td>
                  <td><div class="personal">pilates <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">pilates <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">boxing <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">pilates <span>7:00 - 7:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">11:00 - 12:55</th>
                  <td><div class="personal">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="group">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">outdoor <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="kid">YOGA <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">boxing <span>7:00 - 7:55</span></div></td>
                  <td><div class="outdoor">cycling <span>7:00 - 7:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">13:00 - 14:55</th>
                  <td><div class="outdoor">cycling <span>13:00 - 13:55</span></div></td>
                  <td><div class="personal">pilates <span>13:00 - 13:55</span></div></td>
                  <td><div class="group">outdoor <span>13:00 - 13:55</span></div></td>
                  <td><div class="group">YOGA <span>13:00 - 13:55</span></div></td>
                  <td><div class="outdoor">pilates <span>13:00 - 13:55</span></div></td>
                  <td><div class="kid">boxing <span>13:00 - 13:55</span></div></td>
                  <td><div class="group">pilates <span>13:00 - 13:55</span></div></td>
                </tr>
                <tr>
                  <th class="row hidden-sm hidden-lg hidden-md">Monday</th>
                  <th scope="row">15:00 - 15:55</th>
                  <td><div class="group">YOGA <span>15:00 - 15:55</span></div></td>
                  <td><div class="kid">outdoor <span>15:00 - 15:55</span></div></td>
                  <td><div class="group">outdoor <span>15:00 - 15:55</span></div></td>
                  <td><div class="personal">YOGA <span>15:00 - 15:55</span></div></td>
                  <td><div class="personal">cycling <span>15:00 - 15:55</span></div></td>
                  <td><div class="kid">boxing <span>15:00 - 7:55</span></div></td>
                  <td><div class="outdoor">cycling <span>15:00 - 15:55</span></div></td>
                </tr>
              </tbody>
            </table>
        </div>
    </section>
    <!-- SCHEDULE SECTION -->
    <!-- Article Section -->

    @include('partials.events-section')
    <!-- Article Section -->
    {{-- <section class="about_event">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <img src="{{  asset('build/assets/img/big_image3.jpg') }}" class="img-responsive" alt="">
          </div>
          <div class="col-md-4">
            <div class="info">
                <h4>Upcoming Event</h4>
                <span><b>Date:</b> 10/12/2016</span>
                <span><b>Location:</b> Our fitness club</span>
                <p>My favorite coach, teacher or mentor and what they taught me</p>
                <p>I’ve been fortunate to have many great coaches during my athletic pursuits. When you’re young you don’t really realize how much these people sacrifice in terms of volunteering time, money and energy into helping kids / athletes grow into productive members of society. When you’re young you don’t really realize how much these people sacrifice in terms of volunteering time, money and energy into helping kids</p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
</div>
    <!-- About SECTION -->
@endsection

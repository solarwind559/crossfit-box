{{-- @extends('layouts.app') --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <div class="text-center">
                            <h1>Create Post</h1>
                        </div>
                        {{-- <form method="POST" action="">
                            @csrf
                            <textarea id="posttextarea" name="content"></textarea>
                        </form> --}}

                        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->

                            <x-forms.tinymce-editor/>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    tinymce.init({
  selector: '#posttextarea',
  plugins: 'link image code',
  toolbar: 'undo redo | styleselect | bold italic | link image code'
});

</script>

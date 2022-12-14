<!-- resources/views/child.blade.php -->

{{--@extends('layouts.app', ['header' => 'head'], ['slot' => 'head'] )--}}

{{--@section('title', 'Page Title')--}}

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <p>This is my body content.</p>--}}
{{--@endsection--}}

{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">First</th>--}}
{{--        <th scope="col">Last</th>--}}
{{--        <th scope="col">Handle</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    <tr>--}}
{{--        <th scope="row">1</th>--}}
{{--        <td>Mark</td>--}}
{{--        <td>Otto</td>--}}
{{--        <td>@mdo</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th scope="row">2</th>--}}
{{--        <td>Jacob</td>--}}
{{--        <td>Thornton</td>--}}
{{--        <td>@fat</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <th scope="row">3</th>--}}
{{--        <td colspan="2">Larry the Bird</td>--}}
{{--        <td>@twitter</td>--}}
{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a class="btn btn-default" href="{{route('post.create')}}">Create</a>

                    <div class="container">

                        @include('partial.success')

                        <table class="table table-hover" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Operations</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($posts))
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            {{ $post->id }}
                                        </td>
                                        <td>
                                            <a class="btn btn-link" href="{{ route('post.show', $post->id) }}">
                                                {{ $post->title }}
                                            </a>

                                        </td>
                                        <td>
                                            @if ($post->published)
                                                <p class="bg-success">
                                                    Published
                                                </p>
                                            @else
                                                <p class="bg-danger">
                                                    Unpublished
                                                </p>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-default" href="{{ route('post.edit',  $post->id)}}">Edit</a>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('post.destroy',  $post->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>




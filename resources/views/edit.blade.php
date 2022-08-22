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


                    <div class="container">

                        @include('partial.error')

                        <div class="row">
                            <div class="col-md-offset-4 col-md-4">
                                <form method="post" action="{{ route('post.update',  $post->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea id="body" name="body" class="form-control">{{ $post->body }}</textarea>
                                    </div>

                                    <input type="submit" value="Submit" class="btn btn-success">

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

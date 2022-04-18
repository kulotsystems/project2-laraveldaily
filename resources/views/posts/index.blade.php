<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }}">Add new Post</a>
                    <br><br>
                    <table>
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                    <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="SUBMIT" onclick="return confirm('Are you sure?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

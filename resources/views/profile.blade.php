@extends('layouts.app')
@section('content')
<div>
    <div class="bg-white">
        <div name="header" class="p-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </div>
    </div>


    <div class="mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('put')

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nom
                            </label>
                            <input name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="name" value="{{ $user->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input name="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="text" placeholder="email" value="{{ $user->email }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                Addresse
                            </label>
                            <input name="address"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="address" type="text" placeholder="address" value="{{ $user->address }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                Téléphone
                            </label>
                            <input name="phone"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="phone" type="text" placeholder="phone" value="{{ $user->phone }}">
                        </div>

                        <div class="mb-4">
                            <label for="biography" class="block text-gray-700 text-sm font-bold mb-2">Bio</label>

                            <textarea id="biography" name="biography">
                                {{ $user->biography }}
                            </textarea>
                        </div>

                        <div>
                            <button type="submit"
                                class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full">
                                Update
                            </button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-5">
                <div class="col-span-1 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg p-6">
                    <div class="inline-flex items-center mb-2.5 h-12">
                        <h4 class="text-lg font-bold mr-2.5">Picture:</h4>
                        <a href="{{ $user->picture }}" target="_blank" class="inline-flex items-center">
                            <img src="{{ $user->picture }}" class="w-10 h-10 rounded-full mr-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>

                        </a>
                    </div>

                    <form method="post" action="{{ route('profile.files') }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="fileType" value="picture">
                        <div class="w-full pb-2.5">
                            <input type="file" id="picture" name="file" accept="image/png, image/jpeg">
                        </div>

                        <button type="submit"
                            class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full">
                            Update
                        </button>
                    </form>
                </div>


                <div class="col-span-1 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg p-6">
                    <div class="inline-flex items-center mb-2.5 h-12">
                        <h4 class="text-lg font-bold mr-2.5">Cv:</h4>
                        <a href="{{ $user->cv }}" target="_blank" class="inline-flex items-center">
                            <embed src="{{ $user->cv }}" class="w-10 h-10 rounded-full mr-2.5" type="application/pdf">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>

                        </a>
                    </div>


                    <form method="post" action="{{ route('profile.files') }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="fileType" value="cv">
                        <div class="w-full pb-2.5">
                            <input type="file" id="picture" name="file" accept="application/pdf">
                        </div>

                        <button type="submit"
                            class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full">
                            Update
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="mt-3 pb-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h4 class="text-lg font-bold w-max mb-2.5">Links:</h4>
            <div class="">
                <div class="mt-2.5 mb-5 col-span-1 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg p-6">
                    <form method="post" action="{{ route('links.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="Name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                                Url
                            </label>
                            <input name="url"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="url" type="text" placeholder="Url">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="icon">
                                Icon
                            </label>
                            <input name="icon"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="icon" type="text" placeholder="Icon"">
                        </div>
                        <div>
                            <button type=" submit"
                                class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full">
                            Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5">
                @foreach($links as $link)
                <div class="col-span-1 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg p-6">
                    <form method="post" action="{{ route('links.update') }}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $link->id }}">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Name
                            </label>
                            <input name="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" placeholder="Name" value="{{ $link->name }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                                Url
                            </label>
                            <input name="url"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="url" type="text" placeholder="Url" value="{{ $link->url }}">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="icon">
                                Icon
                            </label>
                            <input name="icon"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="icon" type="text" placeholder="Icon" value="{{ $link->icon }}">
                        </div>
                        <div>
                            <button type="submit"
                                class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-full">
                                Update
                            </button>
                            <button type="submit" form="delete-link-{{ $link->id }}"
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full">
                                Delete
                            </button>
                        </div>
                    </form>
                    <form method="post" action="{{ route('links.delete') }}" id="delete-link-{{ $link->id }}">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $link->id }}">
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection

@section('script-after')
<script>
    ClassicEditor
        .create( document.querySelector( '#biography' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
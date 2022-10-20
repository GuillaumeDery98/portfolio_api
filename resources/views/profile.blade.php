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
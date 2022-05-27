<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Focus') }}
        </h2>
    </x-slot>

    {{-- @if (session()->has('message'))
    <div class="bg-green-100 border-t-4 border-green-500 text-green-700 px-4 py-3 rounded-b" role="alert">
        <p>{{ session()->get('message') }}</p>
    </div>
    @endif --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- if focus is empty new focus if not edit focus --}}
                    @if (empty($focus))
                        <form method="POST" action="{{ route('focus.addConfirm') }}">
                    @else
                        <form method="POST" action="{{ route('focus.updateConfirm', $focus->id) }}">
                    @endif
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        {{ __('Focus') }}
                                    </label>
                                    <input type="text" name="focus_name" value="{{ $focus->focus_name ?? '' }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <button type="submit" id="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
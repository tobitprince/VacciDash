<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Facility
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('facilities.update', $facility->id) }}">
                    @csrf
                    @method('put')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $facility->name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="administrator" class="block font-medium text-sm text-gray-700">Administrator</label>
                            <input type="text" name="administrator" id="administrator" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('administrator', $facility->administrator) }}" />
                            @error('administrator')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="county" class="block font-medium text-sm text-gray-700">County</label>
                            <input type="text" name="county" id="county" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('county', $facility->county) }}" />
                            @error('county')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="mfl_code" class="block font-medium text-sm text-gray-700">MFL CODE</label>
                            <input type="text" name="mfl_code" id="mfl_code" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('mfl_code', $facility->mfl_code) }}" />
                            @error('mfl_code')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>                        

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
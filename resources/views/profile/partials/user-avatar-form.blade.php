<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            User avatar 
        </h2>

        <p class="mt-1 text-sm text-gray-600">
Add or updata user avatar        </p>
    </header>

    @if (session('message'))
        <div class="text-red-500">
             {{ session('message') }}
        </div>
    @endif

    <form method="post" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6">
        @csrf
       @method('patch')

        <div>
            <x-input-label for="avatar" value="avatar" />
            <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
    

        <div class="flex items-center gap-4 mt-4" >
            <x-primary-button>{{ __('Save') }}</x-primary-button>

        </div>
    </form>
</section>

<x-layout>
    <x-card>
        <h1 class="font-bold text-3xl ">Register</h1>
<form method="POST" action="/register">
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="sm:col-span-4 mt-5">
            <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-300 sm:max-w-md">
                <input type="text" name="username" id="username"  class="block px-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-blue-300 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required >
              </div>
            </div>
        </div>

        <div class="sm:col-span-4 mt-5">
            <label for="email" class="block text-sm font-medium leading-6 text-white">E-mail</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-300 sm:max-w-md">
                <input type="text" name="email" id="email"  class="block px-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-blue-300 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required>
              </div>
            </div>
        </div>

        <div class="sm:col-span-4 mt-5">
            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-300 sm:max-w-md">
                <input type="password" name="password" id="password"  class="block px-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-blue-300 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" required >
              </div>
            </div>
        </div>

        <div class="sm:col-span-4 mt-5">
            <label for="password_confirmation" class="block text-sm font-medium leading-6 text-white">Confirm Password</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-300 sm:max-w-md">
                <input type="password" name="password_confirmation" id="password_confirmation"  class="block px-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-blue-300 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"  required>
              </div>
            </div>
        </div>
      </div>
    </div>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-red-600">{{ $error }}</p>
                @endforeach
            @endif
  
    <div class="mt-6 flex items-center justify-center gap-x-6">
      <button type="submit" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-300 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">REGISTER</button>
    </div>
  </form>
  

    </x-card>
</x-layout>
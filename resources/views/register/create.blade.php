<x-layout>
    <section class="px-6 py-8">
        <main class="max-wg-lg mx-auto mt-10 bg-gray-100 border border-gray-200  p-6 rounded-xl">
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <h1 class="text-center font-bold text-xl">Register</h1>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        required />
                    
                    </div>
                
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="username"
                        id="username"
                        required />
                    
                        {{-- @error('username')
                        <p class="text-red-500 text-xs mt-2"> {{$message}}</p>
                        @enderror --}}
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            Email
                        </label>
    
                        <input class="border border-gray-400 p-2 w-full"
                            type="text"
                            name="email"
                            id="email"
                            required />
                        
                        </div>
                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                        </label>
    
                        <input class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password"
                            id="password"
                            required />
                        
                        </div>

                        <div class="mb-6">
        
                            <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" />
                            Submit
                        </div>
            
            </form>
        </main>
    </section>
</x-layout>
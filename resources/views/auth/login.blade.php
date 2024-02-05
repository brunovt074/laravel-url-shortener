<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="pt-4 mt-4 pb-4 mb-4">
        <form action="{{ route('login') }}" class="container card mt-4" method="POST">
            @csrf            
            <!-- Email Address -->
            <div class="container row pt-4 align-items-center">
                <label for="email" class="col-4 d-flex font-medium text-sm text-gray-700 dark:text-gray-300">
                    Email
                </label>
                <input id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username" class="col-8 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
            </div>
    
            <!-- Password -->
            <div class="container row pt-4 align-items-center">
                <label for="password" class="col-4 font-medium text-sm text-gray-700 dark:text-gray-300">Password</label>
                <input id="password" type="password" name="password" required="required" autocomplete="current-password" class="col-8 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
    
            </div>
            
            <!-- Remember Me -->
            <div class="container row pt-4 align-items-center">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>
            <div class="container row pt-4 pb-4 align-items-center">
                <a class="col underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="http://127.0.0.1:8000/forgot-password">
                    Forgot your password?
                </a>
                <div class="col">
                    <button type="submit" class="btn text-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ms-3">
                            Log in
                    </button>
                </div>
            </div>        
        </form>
    </div>
</x-app-layout>
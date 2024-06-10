<div>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" x-data="{ showPassword: false }">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=teal&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" wire:submit.prevent="login">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required wire:model="email" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-600 sm:text-sm sm:leading-6">
                        @error('email') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-teal-600 hover:text-teal-500">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2 relative">
                        <input id="password" name="password" :type="showPassword ? 'text' : 'password'" autocomplete="current-password" required wire:model="password" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-teal-600 sm:text-sm sm:leading-6">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer" @click="showPassword = !showPassword">
                            <svg x-show="!showPassword" class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.522 5 12 5c4.478 0 8.268 2.943 9.542 7-.08.34-.175.677-.286 1.01M12 5v.01M2.458 12c.215.673.47 1.327.771 1.958M12 19c-4.478 0-8.268-2.943-9.542-7 .215-.673.47-1.327.771-1.958M12 19c2.296 0 4.432-.722 6.229-1.951M12 19v.01M2.458 12H2.45M21.542 12h-.008M2.458 12l.008-.01M21.542 12l-.008.01" />
                            </svg>
                            <svg x-show="showPassword" x-cloak class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A9.952 9.952 0 0112 19c-4.478 0-8.268-2.943-9.542-7 .215-.673.47-1.327.771-1.958M12 19v.01M2.458 12C3.732 7.943 7.522 5 12 5c.886 0 1.739.15 2.54.427M12 5v.01M12 5c4.478 0 8.268 2.943 9.542 7-.137.43-.293.855-.464 1.268m-1.083-1.268H21.542M12 5c-.787 0-1.545.064-2.286.184M21.542 12h-.008M12 5.01V5M3.24 6.856a10.042 10.042 0 014.153-2.692M2.45 12h.008m17.083-1.268A10.042 10.042 0 0112 5.01M3.24 6.856a10.042 10.042 0 017.544-3.184 10.042 10.042 0 0110.219 8.112M3.24 6.856L12 5.01M21.542 12l-.008.01M3.24 6.856A9.952 9.952 0 0012 19v-.01" />
                            </svg>
                        </div>
                        @error('password') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember" type="checkbox" wire:model="remember" class="h-4 w-4 text-teal-600 focus:ring-teal-600 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Remember Me</label>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-teal-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-teal-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600">Sign in</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <a href="#" class="font-semibold leading-6 text-teal-600 hover:text-teal-500">Start a 14 day free trial</a>
            </p>
        </div>
    </div>
</div>

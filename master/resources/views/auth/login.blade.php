<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AYSEL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F8796C;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin: 20px;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .block {
            display: block;
        }

        .text-gray-700 {
            color: #4A5568;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .mb-2 {
            margin-bottom: 1.5rem; /* Increased margin */
        }

        .shadow {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .py-2 {
            padding-top: 1rem; /* Increased padding */
            padding-bottom: 1rem; /* Increased padding */
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .text-red-500 {
            color: #F56565;
        }

        .italic {
            font-style: italic;
        }

        .text-indigo-600 {
            color: #667EEA;
        }

        .hover\:text-indigo-800:hover {
            color: #4C51BF;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .focus\:outline-none:focus {
            outline: none;
        }


        .mr-2 {
            margin-right: 0.5rem;
        }

        .flex {
            display: flex;
        }

        .items-center {
            align-items: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .bg-indigo-600 {
            background-color: #F56565;
        }

        .hover\:bg-indigo-800:hover {
            background-color: #F56565;
        }

        .text-white {
            color: #ffffff;
        }

        .font-bold {
            font-weight: 700;
        }

        .hover\:text-indigo-600:hover {
            color: #F56565;
        }

        .hover\:text-indigo-800:hover {
            color: #F56565;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- AYSEL Name -->
        <h1 style="text-align: center; font-size: 24px; color: #F56565;">AYSEL</h1>

        <!-- Session Status -->
        <div class="mb-4 text-center text-green-600">
            {{ session('status') }}
        </div>

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if ($errors->has('email'))
                    <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if ($errors->has('password'))
                    <p class="text-red-500 text-xs italic mt-1">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="mb-4">
                <input id="remember_me" type="checkbox" name="remember" class="mr-2 leading-tight">
                <label for="remember_me" class="text-gray-700 text-sm font-bold">Remember me</label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-800" style="color: #F56565">Forgot your password?</a>
                @endif
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>

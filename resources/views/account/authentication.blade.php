<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <style>
        .modal{
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modalcontent{
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
        }
        #login{
            filter: none;
        }
        #step2{
            display: none;
        }
        #steplabel1{
            background-color: #85f937;
        }
        #steplabel2{
            background-color: #a2a2a2;
        }
    </style>

</head>
<body>
    <div id="maincontainer" class="flex w-full h-screen md:items-center md:justify-center transition">
        <div class="flex flex-wrap w-full md:w-4/5  md:h-4/5">
            <div class="flex w-full md:w-1/2 items-center justify-center">
                <h1 class="text-center text-4xl font-bold md:m-6 mx-12">Online Water Refilling System</h1>
            </div>
            <div class=" md:w-1/2 md:flex md:items-center md:justify-center w-4/5 mx-auto hover:drop-shadow-xl">
                <div class="w-4/5 shadow-xl rounded-3xl mx-auto hover:scale-105 transition">
                    <form action="/login" method="POST" class="mx-auto w-4/5">
                        @csrf
                        @error('firstname')
                        <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('lastname')
                            <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('email')
                            <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('contactnumber')
                            <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('address')
                            <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('password')
                                <p class="text-red-500 text-s font-bold italic">*{{ $message }}</p>
                        @enderror
                        @error('error')
                                <p class="text-red-500 font-bold text-s italic mb-2">{{ $message }}</p>
                         @enderror
                        @error('success')
                            <p class="text-green-500 font-bold text-s italic mb-2">{{ $message }}</p>
                        @enderror
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="example@gmail.com" required autocomplete="email">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Your Password" required autocomplete="new-password">
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="w-full mb-4 mt-8 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-110" type="submit">
                                Login
                            </button>
                        </div>
                        <div class="mb-4">
                            <p class="text-center font-bold">or</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p></p>
                            <button id="modalbtn" type="button" class="w-full mb-4 bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none transition focus:shadow-outline hover:scale-110">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="registrationmodal" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <h2 class="font-bold mb-3">Sign Up</h2>
            <div class="mx-2">


                <form action="/registration" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 mb-4">
                        <div class="mr-2">
                            <p id="steplabel1" class="text-center rounded-md">Step 1</p>
                        </div>
                        <div>
                            <p id="steplabel2" class="text-center rounded-md">Step 2</p>
                        </div>
                    </div>

                    <div id="step1">
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="firstname" name="firstname" type="text" placeholder="First Name">
                                @error('firstname')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="lastname" name="lastname" type="text" placeholder="Last Name">
                                @error('lastname')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="address" name="address" type="text" placeholder="Address">
                            @error('address')
                            <p class="text-red-500 text-xs font-bold italic">{{ $message }}</p>
                        @enderror

                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="email" name="email" type="email" placeholder="Email">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="contactnumber" name="contactnumber" type="text" placeholder="Contact Number">
                            @error('contactnumber')
                            <p class="text-red-500 text-xs font-bold italic">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="grid grid-cols-2 mb-4">
                            <div class="mr-2">
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="password" name="password" placeholder="Password" type="password">
                                @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" id="password_confirmation" name="password_confirmation" type='password' placeholder="Confirm Password">
                            </div>
                        </div>
                        <div>
                            <button id="pagebtn" class="w-full mb-4 mt-8 bg-sky-400 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-105" type="button">
                                Next
                            </button>
                        </div>
                    </div>



                    <div id="step2" class="transition">

                        <div class="mt-4">
                            <p class="font-bold">Do you have your own water container at your house?</p>
                        </div>
                        <div class="">
                            <input type="radio" id="negative" name="container" value="negative">
                            <label for="contianer">I don't have my own container</label><br>
                        </div>
                        <div>
                            <input type="radio" id="positive" name="container" value="positive">
                            <label for="container">I have my own container</label><br>
                        </div>
                        <div>
                            <h5 class="font-bold">Pick your container below and tell us how many you have.</h5>
                            <p class="text-xs">You can select multiple if you have different kinds of container</p>
                        </div>
                        <div class="grid grid-cols-4">
                            <div>
                                <div class="h-32">
                                    <img src="{{url('/assets/container1.jpg')}}" class="w-full h-full" alt="">
                                </div>
                                <input disabled class="shadow appearance-none border rounded w-1/2  m-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" type="number" id="container1" name="container1">
                            </div>
                            <div>
                                <div class="h-32">
                                    <img src="{{url('/assets/container2.jpg')}}" class="w-full h-full" alt="">
                                </div>
                                <input disabled class="shadow appearance-none border rounded w-1/2  m-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" type="number" id="container2" name="container2">
                            </div>
                            <div>
                                <div class="h-32">
                                    <img src="{{url('/assets/container3.jpg')}}" class="w-full h-full" alt="">
                                </div>
                                <input disabled class="shadow appearance-none border rounded w-1/2  m-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" type="number" id="container3" name="container3" >
                            </div>
                            <div>
                                <div class="h-32">
                                    <img src="{{url('/assets/container4.jpg')}}" class="w-full h-full" alt="">
                                </div>
                                <input disabled class="shadow appearance-none border rounded w-1/2  m-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" type="number" id="container4" name="container4" >
                            </div>
                        </div>
                        <p class="text-sm text-center">Note: If you ever have to change your default container, you can edit it later in your profile. </p>

                        <div>
                            <button class="w-full mt-8 bg-green-400 hover:bg-green-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-105" type="submit">
                                Create Account
                            </button>
                            <button id="back" class="w-full mb-4 mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition hover:scale-105" type="button">
                                Back
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="{{url('/js/registration.js')}}"></script>
</body>
</html>

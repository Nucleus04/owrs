<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-Profile</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <style>
        .modal{
            z-index: 1;
            display: none;
            width: 100%;
            height: 100%;
            background-color:rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
        }
        .modalcontent{
            background-color: #fefefe;
            margin: auto;
            padding: 10px;
        }
        .form1{
            display: none;
        }
        .form2{
            display: none;
        }
    </style>
</head>
<body>
    <div class="w-full">
        <div id="body" >

            <x-Header time="{{$time}}"/>
        @error('error')
            <p class="text-green-500 text-s font-bold italic text-center pt-4">{{ $message }}</p>
        @enderror
        <div class="flex justify-center items-center">

            <div class="w-full">
                <div class="md:w-5/6 w-full mx-auto">
                    <div class="w-full mt-4">
                        <div class="w-4/5 rounded-xl border border-gray-400 transition shadow-xl mx-auto my-8 overflow-hidden">
                            <div class="w-full border-b border-gray-400 flex">
                                <p class="font-bold text-lg text-green-500  ml-2 basis-11/12">Your personal information</p>
                                <button id="edit" type="button" class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm">Edit</button>
                            </div>
                            <div class="sm:ml-8 ml-4">
                                <p class="text-lg my-2">{{$users->name}}</p>
                                <p class="text-lg my-2">{{$users->address}}</p>
                                <p class="text-lg my-2">{{$users->email}}</p>
                                <p class="text-lg my-2">{{$users->contactNumber}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-5/6 w-full mx-auto">
                    <div class="w-full mt-4">
                        <div class="w-4/5 rounded-xl border border-gray-400 transition shadow-xl mx-auto my-8">
                            <div class="w-full border-b border-gray-400 flex">
                                <p class="font-bold text-lg text-amber-500  ml-2 basis-11/12">Your default container</p>
                                <button id="edit1" class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm " type="button">Edit</button>
                            </div>

                            @if($users->container1 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container1.jpg')}}" alt="container1" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">4 Litter container</p>
                                        <p class="font-bold ml-8 text-md text-right">Qty: {{$users->container1}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container2 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container2.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">10 Litter mini water container</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container2}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container3 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container3.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">20 Litter container jug</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container3}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($users->container4 != NULL)
                            <div class="sm:mx-8 mx-4 my-2">
                                <div class="w-full flex flex-wrap">
                                    <div class="w-1/6">
                                        <div class="w-16 h-16 border border-gray-400 rounded-md">
                                            <img src="{{url('/assets/container4.jpg')}}" alt="container2" class="w-full h-full">
                                        </div>
                                    </div>
                                    <div class="w-5/6 flex flex-wrap items-center">
                                        <p class="font-bold ml-8 text-md text-left w-2/3">18.9 Litter gallon</p>
                                        <p class="font-bold ml-8 text-md text-right">{{$users->container4}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center hover:scale-105 transition m-8">
            <button><a class="bg-red-500 px-8 py-2 rounded-lg shadow-lg" href="/logout">Logout</a></button>
        </div>

    </div>

        <div id="formmodal" class="modal">

                <div class="mx-auto sm:w-1/2 lg:w-1/3 w-4/5 mt-20 bg-slate-50 rounded-xl">
                    <div class="flex">
                        <div class="w-full">
                            <div class="my-2 mx-4">
                                <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
                                <p id="form-tittle" class="font-bold text-green-500">Edit your personal information</p>
                            </div>
                            <form action="/edit_personalin_formation" method="POST" class="pt-2 pb-4">
                                @csrf
                                <div id="form1">
                                    <div class="mx-auto w-4/5 my-2">
                                        <input type="text" class="w-full p-1 m-1 rounded-md shadow-md hover:scale-105 transition" id="name" name="name" placeholder="{{$users->name}}">
                                    </div>
                                    <div class="mx-auto w-4/5 my-2">
                                        <input type="text" class="w-full p-1 m-1 rounded-md shadow-md hover:scale-105 transition" id="address" name="address" placeholder="{{$users->address}}">
                                    </div>
                                    <div class="mx-auto w-4/5 my-2">
                                        <input type="text" class="w-full p-1 m-1 rounded-md shadow-md hover:scale-105 transition" id="email" name="email" placeholder="{{$users->email}}">
                                    </div>
                                    <div class="mx-auto w-4/5 my-2">
                                        <input type="text" class="w-full p-1 m-1 rounded-md shadow-md hover:scale-105 transition" id="contactNumber" name="contactNumber" placeholder="{{$users->contactNumber}}">
                                    </div>
                                </div>
                                <div class=" mx-auto py-2 flex">
                                    <button class="py-1 px-4 mx-auto rounded-md shadow-md bg-green-400 hover:bg-green-500" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>

        </div>

        <div id="formmodal2" class="modal">
            <div class="mx-auto sm:w-1/2 lg:w-1/3 w-4/5 mt-20 bg-slate-50 rounded-xl">
                <div class="mx-4 pt-2">
                    <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
                    <p id="form-tittle" class="font-bold text-amber-500">Edit your default container</p>
                </div>
                <form action="/edit_container" method="POST" class="p-4">
                    @csrf
                    <div id="form2" class="grid grid-cols-4 pb-2">
                        <div>
                            <div class="h-32">
                                <img src="{{url('/assets/container1.jpg')}}" class="w-full h-full" alt="">
                            </div>
                            <div class="w-12  mx-auto">
                                <input class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer hover:scale-105 transition " type="number" id="container1" name="container1" placeholder="{{$users->container1}}">
                            </div>
                        </div>
                        <div>
                            <div class="h-32">
                                <img src="{{url('/assets/container2.jpg')}}" class="w-full h-full" alt="">
                            </div>
                            <div class="w-12  mx-auto">
                                <input class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer hover:scale-105 transition" type="number" id="container2" name="container2" placeholder="{{$users->container2}}">
                            </div>
                        </div>
                        <div>
                            <div class="h-32">
                                <img src="{{url('/assets/container3.jpg')}}" class="w-full h-full" alt="">
                            </div>
                            <div class="w-12  mx-auto">
                                <input class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer hover:scale-105 transition" type="number" id="container3" name="container3" placeholder="{{$users->container3}}" >
                            </div>
                        </div>
                        <div>
                            <div class="h-32">
                                <img src="{{url('/assets/container4.jpg')}}" class="w-full h-full" alt="">
                            </div>
                            <div class="w-12  mx-auto">
                                <input class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer hover:scale-105 transition" type="number" id="container4" name="container4" placeholder="{{$users->container4}}">
                            </div>
                        </div>
                    </div>

                    <div class=" mx-auto py-2 flex">
                        <button class="py-1 px-4 mx-auto rounded-md shadow-md bg-amber-300 hover:bg-amber-500">Save</button>
                    </div>

                </form>

            </div>

        </div>


</div>
    <script src="{{url('/js/profile.js')}}"></script>
</body>
</html>

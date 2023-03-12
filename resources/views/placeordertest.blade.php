<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-Place Order</title>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    @vite('resources/css/app.css')

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
    </style>
</head>
<body>
    <div class="w-full body">
        <x-Header time="{{$time}}"/>
        <div>
            <div class="flex flex-wrap">

                <div class="md:w-2/3 w-full md:mt-4">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto mt-8 hover:scale-105 transition">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-red-500  ml-2 basis-11/12">Step 1: Verify your information</p>
                            <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm" type="button" id="edit1">Edit</button>
                        </div>
                        <div class="sm:ml-8 ml-4">
                            <p class="text-lg my-2">{{$users->name}}</p>
                            <p class="text-lg my-2">{{$users->address}}</p>
                            <p class="text-lg my-2">{{$users->email}}</p>
                            <p class="text-lg my-2">{{$users->contactNumber}}</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/3 w-full md:mt-4">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto mt-8 hover:scale-105 transition">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-amber-500 ml-2 basis-11/12">Step 2: Set time for delivery</p>
                        </div>
                        <div class="flex justify-center my-4">
                            <form action="/placingyourorder" method="POST" id="timeform" class="flex flex-row justify-center">
                                @csrf
                                <input name="hour" type="number" class="border rounded-md w-3/12 mx-1 text-center" required>
                                <p><b>:</b></p>
                                <input name="minute" type="number" class="border rounded-md w-3/12 mx-1 text-center" required>
                                <input name="am" id="am" type="radio" value=" AM" class="mx-1" required>
                                <label for="am">AM</label>
                                <input name="am" id="am" type="radio" value=" PM" class="mx-1" >
                                <label for="am">PM</label>
                            </form>
                        </div>
                        <div class="flex justify-center content-end my-4">
                            <div class="px-5 py-1.5 bg-neutral-500 w-11/12 border border-neutral-600 rounded-lg">
                                <p class="text-xs">Note: You must give an allowance of 2 hours for the processing of your order. So if you are ordering at 2pm you must have a preferred time of 4pm and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-wrap">

                <div class="md:w-2/3 w-full mt-4">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto mt-8 hover:scale-105 transition">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-green-500  ml-2 basis-11/12">Step 3: View order container</p>
                            <button class="font-bold text-center basis-1/12 mr-4 hover:scale-110 text-sm" type="button" id="edit2">Edit</button>
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
                                        <p class="font-bold ml-8 text-md text-left sm:w-auto w-full">4 Litter container</p>
                                        <p class="font-bold ml-8 text-md text-right font-bold text-purple">P {{$users->price1}}.00</p>
                                        <p class="font-bold ml-8 text-md text-right">Qty. {{$users->container1}}</p>
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
                                        <p class="font-bold ml-8 text-md text-left sm:w-auto w-full">10 Litter mini water container</p>
                                        <p class="font-bold ml-8 text-md text-right font-bold text-purple ,d:1/2">P {{$users->price2}}.00</p>
                                        <p class="font-bold ml-8 text-md text-right">Qty. {{$users->container2}} </p>
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
                                        <p class="font-bold ml-8 text-md text-left sm:w-auto w-full">20 Litter container jug</p>
                                        <p class="font-bold ml-8 text-md text-right font-bold text-purple">P {{$users->price3}}.00</p>
                                        <p class="font-bold ml-8 text-md text-right">Qty. {{$users->container3}}</p>
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
                                        <p class="font-bold ml-8 text-md text-left sm:w-auto w-full">18.9 Litter gallon</p>
                                        <p class="font-bold ml-8 text-md text-right font-bold text-purple">P {{$users->price4}}.00</p>
                                        <p class="font-bold ml-8 text-md text-right">Qty. {{$users->container4}}</p>
                                    </div>
                                </div>
                            </div>
                            @endif
                    </div>
                </div>

                <div class="md:w-1/3 w-full md:mt-4 mb-12">
                    <div class="w-4/5 rounded-xl border shadow-xl mx-auto mt-8 hover:scale-105 transition">
                        <div class="w-full border-b flex">
                            <p class="font-bold text-lg text-sky-500 ml-2 basis-11/12">Step 4: View Order summary</p>
                        </div>
                        <div class="px-5 py-1.5 h-full">
                            <p class="text-lg"><b>Subtotal</b></p>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>4 Litter container</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>{{$users->price1}}</b></p>
                            </div>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>10 Litter mini water container</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>{{$users->price2}}</b></p>
                            </div>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>20 Litter container jug</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>{{$users->price3}}</b></p>
                            </div>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>18.9 Litter gallon</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>{{$users->price4}}</b></p>
                            </div>
                            <br>
                            <div class="flex flex-row px-5">
                                <p class="w-4/5 text-sm text-neutral-600"><b>Delivery fee</b></p>
                                <p class="w-1/5 text-sm text-neutral-600"><b>P0.00</b></p>
                            </div>
                            <div class="flex flex-row px-2 mt-2 bg-neutral-500 rounded-md">
                                <p class="w-4/5 text-lg"><b>Total</b></p>
                                <p class="w-1/5 text-lg"><b>{{$users->totalprice}}</b></p>
                            </div>
                            <p class="text-xs">Note: You can place your order if you have active order.</p>

                            <button type="submit" form="timeform" class="w-full my-2 py-1 rounded-lg bg-green-400 text-xl text-white"
                            @if ($users->count > 0)
                                disabled
                            @endif
                            >Place Order</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </div>


    <div id="formmodal1" class="modal">

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

    <script src="{{url('js/placeorder.js')}}"></script>
</body>
</html>

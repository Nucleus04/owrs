<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWRS - Active Orders</title>
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="h-screen w-full">
        <x-Header time="{{$time}}"/>
        @if ($transaction != NULL)
    <div class="flex flex-wrap justify-between">
        <div class="sm:w-2/3 w-full mt-6">

            <div name="transaction-details-table" class="mx-5 border-2 rounded-lg border-neutral-600 shadow-xl">
                <div class="flex flex-row justify-between border-b-2 px-5 border-neutral-600">
                    <h3 class="text-red-500"><b>Transaction Number: {{$transaction->refID}}</b></h3>
                </div>
                <div class="px-10 mt-1">
                    <h3><b>Your Delivery Information</b></h3>
                    <div class="px-5 my-2">
                        <p>{{$transaction->name}}</p>
                        <p>{{$transaction->address}}</p>
                        <p>{{$transaction->contactNumber}}</p>
                    </div>
                    <h3><b>Your Order:</b></h3>
                    <div class="px-5 my-2">
                        <p class="text-neutral-600">Order created on <b>{{$transaction->created_at}}</b></p>
                        <p class="text-neutral-600">To be delivered by <b>{{$transaction->prefferedTime}}</b></p>
                        @if ($transaction->container1 != NULL)
                            <div class="flex flex-row h-16 content-center my-1">
                                <img src="{{url('/assets/container1.jpg')}}" class="object-contain w-1/12" alt="">
                                <p class="self-center text-neutral-600 w-7/12"><b>4 Litter container</b></p>
                                <p class="self-center text-purple w-2/12"><b>P {{$transaction->price1}}</b></p>
                                <p class="self-center text-neutral-600 w-2/12"><b>Qty.{{$transaction->container1}}</b></p>
                            </div>
                        @endif
                        @if ($transaction->container2 != NULL)
                            <div class="flex flex-row h-16 content-center my-1">
                                <img src="{{url('/assets/container2.jpg')}}" class="object-contain w-1/12" alt="">
                                <p class="self-center text-neutral-600 w-7/12"><b>10 Litter mini water container</b></p>
                                <p class="self-center text-purple w-2/12"><b>P {{$transaction->price2}}</b></p>
                                <p class="self-center text-neutral-600 w-2/12"><b>Qty.{{$transaction->container2}}</b></p>
                            </div>
                        @endif
                        @if ($transaction->container3 != NULL)
                            <div class="flex flex-row h-16 content-center my-1">
                                <img src="{{url('/assets/container3.jpg')}}" class="object-contain w-1/12" alt="">
                                <p class="self-center text-neutral-600 w-7/12"><b>20 Litter container jug</b></p>
                                <p class="self-center text-purple w-2/12"><b>P {{$transaction->price3}}</b></p>
                                <p class="self-center text-neutral-600 w-2/12"><b>Qty.{{$transaction->container3}}</b></p>
                            </div>
                        @endif
                        @if ($transaction->container4 != NULL)
                            <div class="flex flex-row h-16 content-center my-1">
                                <img src="{{url('/assets/container4.jpg')}}" class="object-contain w-1/12" alt="">
                                <p class="self-center text-neutral-600 w-7/12"><b>18.9 Litter gallon</b></p>
                                <p class="self-center text-purple w-2/12"><b>P {{$transaction->price4}}</b></p>
                                <p class="self-center text-neutral-600 w-2/12"><b>Qty.{{$transaction->container4}}</b></p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

            <div name="status-order-summary-table" class="sm:w-1/3 w-full my-6">
                <div class=" h-10 flex bg-red-500 rounded-lg justify-center sm:mr-5 sm:mx-0 mx-5">
                    <p class="text-white text-xl self-center"><b>{{$transaction->status}}</b></p>
                </div>
                <div class="border-2 mt-4 rounded-lg border-neutral-600 sm:mr-5 sm:mx-0 mx-5 shadow-xl">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-green-400"><b>Order Summary</b></h3>
                    </div>
                    <div class="px-5 py-1.5 h-full">
                        <p class="text-lg"><b>Subtotal</b></p>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>4 Litter container</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P{{$transaction->price1}}.00</b></p>
                        </div>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>10 Litter mini water container</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P{{$transaction->price2}}.00</b></p>
                        </div>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>20 Litter container jug</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>{{$transaction->price3}}.00</b></p>
                        </div>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>18.9 Litter gallon</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>{{$transaction->price4}}.00</b></p>
                        </div>
                        <br>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>Delivery fee</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P 0.00</b></p>
                        </div>
                        <div class="flex flex-row px-2 mt-2 bg-neutral-500 rounded-md">
                            <p class="w-4/5 text-lg"><b>Total</b></p>
                            <p class="w-1/5 text-lg"><b>{{$transaction->totalprice}}</b></p>
                        </div>
                        @if ($transaction->status == "Pending")
                            <button type="button" class="w-full my-2 py-1 rounded-lg border border-neutral-600 text-xl text-neutral-600"><a href="/cancellingorder"><b>Cancel Order</b></a></button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if ($transaction == NULL)
        <div class="h-full w-full flex justify-center items-center">
            <h1>No Orders yet</h1>
        </div>
        @endif
    </div>
</body>
</html>

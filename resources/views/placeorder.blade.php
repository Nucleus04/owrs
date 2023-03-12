<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWRS</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full h-screen">
        <x-Header/>
        <div name="placeorder" class="h-full">
            <div name="step1and2" class="flex flex-row h-2/5">
                <div name="step1" class="border-2 mx-8 my-8 h-5/5 w-7/12 rounded-lg border-neutral-600">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-red-500"><b>Step 1: Verify your information</b></h3>
                    </div>
                    <div class="px-5 py-1.5">
                        <p>Jonathan Velasco</p>
                        <p>19B Dandelion st., Brgy. Old Capitol Site, Quezon City</p>
                        <p>jonathanvelasco@gmail.com</p>
                        <p>0939 462 8112</p>
                    </div>
                </div>
                <div name="step2" class="border-2 mx-8 my-8 h-5/5 w-5/12 rounded-lg border-neutral-600">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-yellow"><b>Step 2: Set preferred time of delivery</b></h3>
                    </div>
                    <div class="flex justify-center my-4">
                        <form class="flex flex-row justify-center">
                            <input name="time" type="text"" class="border rounded-md w-1/12 mx-1 text-center">
                            <p><b>:</b></p>
                            <input name="time" type="text"" class="border rounded-md w-1/12 mx-1 text-center">
                            <label for="am">AM</label>
                            <input name="ampm" id="pm" type="radio" class="mx-1">
                            <label for="pm">PM</label>
                        </form>
                    </div>
                    <div class="flex justify-center content-end my-4">
                        <div class="px-5 py-1.5 bg-neutral-500 w-11/12 border border-neutral-600 rounded-lg">
                            <p class="text-xs">Note: You must give an allowance of 2 hours for the processing of your order. So if you are ordering at 2pm you must have a preferred time of 4pm and beyond.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div name="step3and4" class="flex flex-row">
                <div name="step3" class="border-2 mx-8 my-8 w-7/12 rounded-lg border-neutral-600">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-green-400"><b>Step 3: View ordered container</b></h3>
                    </div>
                    <div class="px-5 py-1.5">
                        <div class="flex flex-row h-16 content-center my-2">
                            <img src="{{url('/assets/container2.jpg')}}" class="object-contain w-1/12" alt="">
                            <p class="self-center text-neutral-600 w-7/12"><b>2.5 Gallon</b></p>
                            <p class="self-center text-purple w-2/12"><b>P20.00</b></p>
                            <p class="self-center text-neutral-600 w-2/12"><b>Qty.2</b></p>
                        </div>
                        <div class="flex flex-row h-16 content-center my-2">
                            <img src="{{url('/assets/container4.jpg')}}" class="object-contain w-1/12" alt="">
                            <p class="self-center text-neutral-600 w-7/12"><b>5 Gallon Clear Water Container</b></p>
                            <p class="self-center text-purple w-2/12"><b>P35.00</b></p>
                            <p class="self-center text-neutral-600 w-2/12"><b>Qty.2</b></p>
                        </div>
                    </div>
                </div>
                <div name="step4" class="border-2 mx-8 my-8 w-5/12 rounded-lg border-neutral-600">
                    <div class="border-solid border-b-2 border-neutral-600">
                        <h3 class="pl-3 text-sky-400"><b>Step 4: View order summary</b></h3>
                    </div>
                    <div class="px-5 py-1.5 h-full">
                        <p class="text-lg"><b>Subtotal</b></p>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>2.5 Gallon Jug</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P20.00</b></p>
                        </div>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>5 Gallon Clear Water Container</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P35.00</b></p>
                        </div>
                        <br>
                        <div class="flex flex-row px-5">
                            <p class="w-4/5 text-sm text-neutral-600"><b>Delivery fee</b></p>
                            <p class="w-1/5 text-sm text-neutral-600"><b>P0.00</b></p>
                        </div>
                        <div class="flex flex-row px-2 mt-2 bg-neutral-500 rounded-md">
                            <p class="w-4/5 text-lg"><b>Total</b></p>
                            <p class="w-1/5 text-lg"><b>P75.00</b></p>
                        </div>
                        <button type="button" class="w-full my-2 py-1 rounded-lg bg-green-400 text-xl text-white"><b>Place Order</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

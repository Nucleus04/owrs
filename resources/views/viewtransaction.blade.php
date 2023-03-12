<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-History</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Transaction</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="w-full h-screen">
        <x-Header time="{{$transaction}}"/>
        <div class="mt-5">
            <p class="text-lg font-bold sm:ml-12 text-center sm:text-left"> Transaction History: </p>

                <div class="flex flex-row justify-center">
                <div class="md:w-5/6 w-10/12">
                    @if ($history == NULL)
                        <p>No transactions history.</p>
                    @endif
                    @foreach ($history as $item)
                   <div class="w-full rounded-xl  shadow-xl mx-15 my-8 hover:scale-105 transition">
                    <div class="sm:ml-8 ml-4 flex flex-row my-2 justify-evenly">
                        <p class="text-lg my-2 mx-2"><b>Transaction Number: </b>{{$item->refID}} </p>
                        <p class="text-lg my-2 mx-2"><b>Date: </b>{{$item->created_at}}</p>
                        <p class="text-lg my-2 mx-2"><b>Price: </b> {{$item->price}}</p>
                        <p class="text-lg my-2 mx-2"><b>Status: </b>{{$item->status}}</p>
                    </div>
                </div>
                @endforeach
                </div>
        </div>
    </div>
</body>
</html>

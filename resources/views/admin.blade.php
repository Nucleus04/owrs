<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
    <style>
        .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
    </style>
</head>
<body>
    <div class="w-full h-screen">
        <x-adminHeader/>
        <!-- Queue -->
        <div class="flex h-48 justify-center items-center">
                <div class="w-96 grid grid-cols-3">
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-red-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$pending}}</p>
                        </div>
                        <p class="text-center font-bold">On Queue</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-amber-500 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$proccessing}}</p>
                        </div>
                        <p class="text-center font-bold">Processing</p>
                    </div>
                    <div>
                        <div class="w-24 h-24 rounded-md border-4 border-green-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$todeliver}}</p>
                        </div>
                        <p class="text-center font-bold">To Deliver</p>
                    </div>
                </div>
            </div>
        <!-- Current Orders -->
        <div class="mt-5">
            <p class="text-lg font-bold sm:ml-12 text-center sm:text-left"> List of current active orders: </p>
                <!-- While Loop -->
                <div class="flex flex-row justify-center">
                    <div class="md:w-5/6 w-full mx-15">
                    @if ($transaction != NULL)
                        @foreach ($transaction as $item)

                        <div class="w-full rounded-xl border shadow-xl mx-15 my-8 hover:scale-105 transition">
                            <div class="sm:ml-8 ml-4 flex flex-row my-2 flex-wrap justify-evenly items-center font-semibold">
                                <p class="text-lg my-2">{{$item->address}} </p>
                                <p class="text-lg my-2">{{$item->created_at}} </p>
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">{{$item->status}}</button>
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Processing</a>
                                      <a href="#">To Deliver</a>
                                      <a href="#">Delivered</a>
                                    </div>
                                  </div>
                                <button id="buttonstatus" type="button" class="sm:w-36 sm:h-12 w-32 h-12 bg-purple text-lg text-slate-50 my-2 rounded-lg">View Order</button>
                            </div>
                        </div>

                        @endforeach
                    @endif
                </div>
        </div>
    </div>


    <script src="{{url('/js/admin.js')}}"></script>
    <script src="{{url('/js/profile.js')}}"></script>
</body>
</html>

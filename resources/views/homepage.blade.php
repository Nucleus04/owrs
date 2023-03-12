<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{'/assets/logo2.png'}}" type="image/x-icon">
    <title>OWRS-Homepage</title>
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
    </style>
</head>
<body>
    <div class="w-full h-screen">
        <div>
            <x-Header time="{{$transaction}}"/>
        <div>
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
                        <div class="w-24 h-24 rounded-md border-4 border-lime-400 mx-auto flex justify-center items-center hover:-translate-y-0.5 shadow-lg">
                            <p class="text-6xl">{{$todeliver}}</p>
                        </div>
                        <p class="text-center font-bold">To Deliver</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-lg font-bold sm:ml-12 text-center sm:text-left">Know more about water</p>
                <div class="w-full flex justify-center items-center h-96">
                    <div class="w-4/5 flex overflow-x-auto overflow-y-hidden scroll-smooth">

                        <button id="buttonone" type="button" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">How does water affect our lives?</p>
                            </div>
                        </button>
                        <button id="buttontwo" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button id="buttonthree" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button id="buttonfour" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                        <button id="buttonfive" class="w-72 h-72 bg-sky-300 rounded-xl shrink-0 shadow-lg hover:drop-shadow-xl hover:scale-105 m-6 transition">
                            <div class="flex w-full h-full items-center">
                                <p class="text-4xl font-bold text-left m-3">Some shit about water</p>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        </div>

    </div>

    <div id="informationmodal1" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <p id="content1">Hello World</p>
        </div>
    </div>

    <div id="informationmodal2" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <p id="content2">ayaya ayaya</p>
        </div>
    </div>

    <div id="informationmodal3" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <p id="content3">jessie kadusale</p>
        </div>
    </div>

    <div id="informationmodal4" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <p id="content4">miguel liwanag</p>
        </div>
    </div>

    <div id="informationmodal5" class="modal">
        <div class="modalcontent transition w-96 lg:w-1/3 md:w-1/2 sm:w-96 shadow-xl rounded-xl hover:drop-shadow-xl">
            <span class="close float-right text-lg font-bold cursor-pointer rounded-full hover:bg-red-600 px-2 transition hover:-translate-y-1">&times;</span>
            <p id="content5">vincent divida</p>
        </div>
    </div>


    <script src="{{url('/js/homepage.js')}}"></script>
</body>
</html>

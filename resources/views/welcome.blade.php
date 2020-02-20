@extends('layouts.app')

@section('content')
<div id="app" class="min-h-screen bg-white">

    <div class=" h-eight bg-flat4 flex">
        <div class="flex h-full w-1/2 bg-flat4">
            <div class="w-1/3 "></div>
            <div class="w-1/3 bg-flat6 h-seven overflow-hidden leading-none px-2">
                <p class=" text-white text-gigantic  font-extrabold leading-tight mt-24 tracking-widest">ROY</p>
                <p class=" text-white text-gigantic  font-extrabold leading-tight -mt-16">DON</p>
                <p class=" text-white underline  text-5xl  font-extrabold  -mt-8 ml-2">DE CASTRO</p>
            </div>
            <div class="w-1/3 pt-72 h-seven overflow-hidden leading-none px-2">
                <div class="border-b-2 h-24 border-dotted border-blue-300"></div>
            </div>
        </div>
        <div class="h-full w-1/2 bg-flat4">
            <div class="hidden lg:block text-flat2 lg:text-xl lg:tracking-widest lg:mt-8 lg:flex lg:align-middle lg:justify-around  lg:mx-40">
            <a href="/admin" class="hover:text-red-600 ">Admin</a>
            <a href="#" class="hover:text-red-600 ">About</a>
            <a href="#" class="hover:text-red-600 ">Portfolio</a>
            <a href="#" class="hover:text-red-600 ">Contact</a>
            </div>
            <div class="border-l-2  pl-8 border-dotted border-blue-300  mt-20 block text-flat1">
            <h1 class="text-5xl font-semibold tracking-wider">E-commerce</h1>
            <p class=" text-flat3 font-normal text-xl">smart contracts & development</p>
            <h1 class="text-5xl font-semibold tracking-wider mt-4 ">Web Design</h1>
            <p class=" text-flat3 font-normal text-xl">backend, frontend, & mobile</p>
            <p class=" text-flat3 font-normal text-xl">AI networks & machine learning</p>
            <h1 class="text-5xl font-semibold tracking-wider mt-4">Maintenance</h1>
            <p class=" text-flat3 font-normal text-xl">outstaffing & outsource delivery</p>
            <h1 class="text-5xl font-semibold tracking-wider mt-4">Graphic Design</h1>
            <p class=" text-flat3 font-normal text-xl">from conception to realization</p>
            </div>
        </div>
    </div>

    <div class=" h-auto bg-white">
        <div class="flex container mx-auto justify-between">
            <img src="/img/icons8-angularjs-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-bootstrap-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-laravel-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-css3-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-git-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-html-5-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-npm-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-react-native-50.png" alt="avatar" class="m-4">
            <img src="/img/icons8-vue-js-50.png" alt="avatar" class="m-4">
        </div>
    </div>

    <div class=" bg-flat6 py-16">
        <div class=" mx-auto container">
            <h1 class="font-semibold tracking-wider  text-white uppercase text-center pb-4 text-4xl ">Web Programming is life.</h1>
            <div class="flex">
                    <img src="/img/man.jpg" alt="avatar" class=" shadow-md h-80 m-4 w-1/2 object-cover object-right-top">
                    <p class=" text-white m-4 w-1/2 text-md tracking-wider">You’ve made it! Welcome to A Nerd’s World. For over 12 years our team has brought a spark to brands around the world. We are extremely passionate about what we do and have always put our clients first. From the initial meet to the finish line, our team’s uniquely personal attention will keep you in the loop as your creative experience unfolds. We are not your typical nerds, we have a lust for life and a passion for creation. We look forward to the opportunity to work with you and welcome you to our world.</p>
            </div>
        </div>
    </div>

    <div class=" bg-white" id="templates">
        <div class=" h-auto container mx-auto ">
            <h1 class="font-semibold tracking-wider text-flat4 uppercase text-center  pb-4   text-4xl pt-6 ">My Web Design Portfolio</h1>
            <h1 class="font-semibold tracking-wider text-flat4 uppercase text-center  pb-8   text-base px-64 ">All of our websites are created in-house. Take a look at our web design portfolio below where you’ll find examples
            of work completed for many industries.</h1>
            <div class="flex flex-wrap p-12">
                <a href="{{ route('templates.show', 1 )}}"><img src="/img/web-thumb1.JPG" alt="avatar" class="m-4"> </a>
                <a href="{{ route('templates.show', 2 )}}"><img src="/img/web-thumb2.JPG" alt="avatar" class="m-4"> </a>
                <a href="{{ route('templates.show', 3 )}}"><img src="/img/web-thumb3.JPG" alt="avatar" class="m-4"> </a>
                <a href="{{ route('templates.show', 4 )}}"><img src="/img/web-thumb4.JPG" alt="avatar" class="m-4"> </a>
                <a href="{{ route('templates.show', 5 )}}"><img src="/img/web-thumb5.JPG" alt="avatar" class="m-4"> </a>
                <img src="/img/web-thumb6.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb7.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb8.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb9.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb10.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb11.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb12.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb13.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb14.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb15.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb16.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb17.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb18.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb19.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb20.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb21.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb22.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb23.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb24.JPG" alt="avatar" class="m-4">
                <img src="/img/web-thumb25.JPG" alt="avatar" class="m-4">
            </div>
        </div>
    </div>

    <div class=" h-24 bg-flat6 mx-auto">
        <h1 class=" text-center py-4 uppercase text-white font-bold text-4xl ">professionalism done right.</h1>
    </div>

    <div class=" h-auto container mx-auto mt-16">
        <div class="text-center">
            <h1 class="font-semibold tracking-wider text-flat4 uppercase text-center  pb-4   text-4xl pt-6 ">Contact me anytime.</h1>
            <p class="font-semibold tracking-wider text-flat4 uppercase text-center  pb-8   text-base px-64 ">Use the form below to contact us. We look forward to learning more about you, your organization, and how we can help you achieve even greater success.</p>

            <form class=" mt-12">
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-flat4  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Name">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-flat4  rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Email">
                    </div>
                    <textarea class="appearance-none  block w-full bg-gray-200 text-gray-200 border border-flat4  rounded my-4 mx-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-4 text-gray-500" name="" id="" cols="30" rows="10">Message:</textarea>
                </div>
                <button class=" bg-flat3 hover:bg-flat4 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >Send Request</button>


            </form>
        </div>
    </div>

    <div class="h-64 bg-flat4 mt-20 ">
        <div class="flex container mx-auto h-full p-12">

            <div class="flex w-1/3">
            </div>

            
            <div class="flex w-1/3">
                <div class="md:w-full md:w-1/2  mb-6 md:mb-0 text-white">        
                        <h1 class="font-bold mb-4">General</h1>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Home</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">About</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Blog</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Contact</a>
                    </div>
                    <div class="md:w-full md:w-1/2  mb-6 md:mb-0 text-white">       
                        <h1 class="font-bold mb-4">Services</h1>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">E-commerce</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Web Design</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Graphic Design</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Maintenance</a>

                    </div>

            </div>
            <div class="flex w-1/3">
                <div class="md:w-full md:w-1/2  mb-6 md:mb-0 text-white">        
                        <h1 class="font-bold mb-4">Pricing</h1>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">E-commerce</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Web Design</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Graphic Design</a>
                        <a href="#" class="no-underline hover:font-bold hover:text-flat5 block">Maintenance</a>
                    </div>
                    <div class="md:w-full md:w-1/2  mb-6 md:mb-0 text-white">        
                        <h1 class="font-bold mb-4">Contact Details</h1>
                        <p>Pasig</p>
                        <p>Metro Manila</p>
                        <p>Philippines</p>
                        <p>(63) 915-791-1936</p>
                        <p>(632) 8-655-1354</p>
                    </div>

            </div>

        </div>
    </div>



    

</div>
@endsection
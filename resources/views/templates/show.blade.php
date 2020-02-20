@extends('layouts.app')

@section('content')
<div class="bg-flat4">
    <div class="container md:mx-auto">
        <header class="lg:px-16 px-6 bg-flat4 flex flex-wrap items-center lg:py-0 py-2">
            <div class="flex-1 flex justify-between items-center">
                <a href="#">
                    <svg class="fill-current text-white" width="32" height="36" viewBox="0 0 32 36" xmlns="http://www.w3.org/2000/svg"><path d="M15.922 35.798c-.946 0-1.852-.228-2.549-.638l-10.825-6.379c-1.428-.843-2.549-2.82-2.549-4.501v-12.762c0-1.681 1.12-3.663 2.549-4.501l10.825-6.379c.696-.41 1.602-.638 2.549-.638.946 0 1.852.228 2.549.638l10.825 6.379c1.428.843 2.549 2.82 2.549 4.501v12.762c0 1.681-1.12 3.663-2.549 4.501l-10.825 6.379c-.696.41-1.602.638-2.549.638zm0-33.474c-.545 0-1.058.118-1.406.323l-10.825 6.383c-.737.433-1.406 1.617-1.406 2.488v12.762c0 .866.67 2.05 1.406 2.488l10.825 6.379c.348.205.862.323 1.406.323.545 0 1.058-.118 1.406-.323l10.825-6.383c.737-.433 1.406-1.617 1.406-2.488v-12.757c0-.866-.67-2.05-1.406-2.488l-10.825-6.379c-.348-.21-.862-.328-1.406-.328zM26.024 13.104l-7.205 13.258-3.053-5.777-3.071 5.777-7.187-13.258h4.343l2.803 5.189 3.107-5.832 3.089 5.832 2.821-5.189h4.352z"></path></svg>
                </a>
            </div>

            <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
                <nav>
                <ul class="lg:flex items-center justify-between text-base text-gray-700 pt-4 lg:pt-0">
                    <li><a class="text-white lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-flat6" href="/#templates">Home</a></li>
                    <li><a class="text-white lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-flat6" href="#">Pricing</a></li>
                    <li><a class="text-white lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-flat6" href="#">Documentation</a></li>
                    <li><a class="text-white lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-flat6 lg:mb-0 mb-2" href="#">Support</a></li>
                </ul>
                </nav>

            </div>
        </header>
    </div>
</div>
<div class="h-64 bg-flat2 bg-cover bg-no-repeat md:h-seven md:bg-cover md:bg-center opacity-75 flex items-center" style="background-image: url(/img/glen.JPG)">
    <div class="container mx-auto text-center p-4 ">
        <h1 class=" leading-none font-normal text-yellow-200 text-6xl lg:text-6xl font-thin ">Help me help you.</h1>
    </div>
</div>

<div class="bg-white p-8 container mx-auto lg:flex">
    <div class="lg:w-1/2 p-4"> 
        <img src="{{asset('/storage/'.$template->image)}}" alt="">
    </div>
    <div class=" leading-relaxed text-gray-700 lg:w-1/2 p-4"> 
        <p class="tracking-wider">Desai Maruszki was founded with great insight on how insurance companies handle personal injury claims. The Desai Maruszki team is comprised of lawyers who have spent their legal careers as defence counsel to many insurance companies at leading insurance defence law firms. Having an insider perspective allows Desai Maruszki to have a practical and appropriate take on each case. Desai Maruszki implements a strategic and tailored approach in developing and advancing every client’s case.</p>
        <h1 class="mt-4 font-bold">Details</h1>
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

@endsection


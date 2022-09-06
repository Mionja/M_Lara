<section class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4" style="background-color: grey">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('')"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            {{-- <img src="{{asset('img/m.png')}}" alt=""> --}}
            <span class="text-black">Tasks of {{auth()->user()->name}}</span>
        </h1>
        <p class="text-2xl text-light font-bold my-4">
            Find or post new task 
        </p>
        <div>
            <a href="{{route('task.create')}}" class=" btn btn-outline-dark inline-block border-2 py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black mb-3">
                Add a task</a>
        </div>
    </div>
</section>
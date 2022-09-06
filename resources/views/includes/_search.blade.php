<form action="{{route('search')}}" method="POST" role="search">
@csrf
    <div class="relative border-2 border-dark m-4 rounded-lg">
        <img src="{{asset('img/search.png')}}" alt="" class="ml-5" width="25">
        <input type="text" name="search"
            class=""
            placeholder="Search task" style="height: 42px; width:80%; border:0ch "/>
            <button type="submit" class=" btn btn-danger rounded-lg">
                Search
            </button>
    </div>

</form>

@props(['blogs']);                                                              <!--data sending declaration-->

<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        <x-category-dropdown></x-category-dropdown>
    </div>
    <form action="" class="my-3">
      <div class="input-group mb-3">
        @if(request('category'))
            <input type="hidden" value="{{request('category')}}" name="category">       <!--checking category is exit or not-->
        @endif

        @if(request('username'))
            <input type="hidden" value="{{request('username')}}" name="username">        <!--checking username is exit or not-->
        @endif

        <input type="text" name = "search" value = "{{request('search')}}" autocomplete="false" placeholder="Search Blogs" class='form-control'/>
        <button class="input-group-text bg-primary text-light" id="basic-addon2" type="submit" >
          Search
        </button>
      </div>
    </form>
    <div class="row">
        @forelse ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <x-blog-card :blog="$blog"></x-blog-card>
            </div>
            @empty
                <p class="text-center text-danger">Blog not Found!</p>
        @endforelse
                {{$blogs->links()}}                                         <!--pagination-->
    </div>
  </section>

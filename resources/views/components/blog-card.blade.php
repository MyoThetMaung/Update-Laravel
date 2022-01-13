@props(['blog']);                                                              <!--data sending declaration-->

    <div class="card">
      <img
        src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h3 class="card-title">{{$blog->title}}</h3>
        <p class="fs-6 text-secondary">
          <a href="/?username={{$blog->author->username}}">{{$blog->author->name}}</a>
          <span> - {{$blog->created_at->diffForHumans()}}</span>
        </p>
        <div class="tags my-3">
          <a href="/?category={{$blog->category->filename}}"><span class="badge bg-success">{{$blog->category->name}}</span></a>
        </div>
        <p class="card-text">
          {{$blog->body}}
        </p>
        <a href="blogs/{{$blog->filename}}" class="btn btn-primary">Read More</a>
      </div>
    </div>

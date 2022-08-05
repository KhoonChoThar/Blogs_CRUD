<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top" alt="..." />
                <p class="fs-6 text-secondary mb-2">
                    <a href="/?author={{ $blog->author->username }}"><span>{{ $blog->author->name }}</span></a>
                    <span>-{{ $blog->created_at->diffForHumans() }}</span>
                    <a href="/?category={{ $blog->category->name }}"><span
                            class="badge bg-warning">{{ $blog->category->name }}</span></a>
                </p>
                <h3 class="my-3">{{ $blog->title }}</h3>
                <p class="lh-md">
                    {{ $blog->body }}
                </p>
            </div>
        </div>
    </div>
    <x-subscribe />
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>

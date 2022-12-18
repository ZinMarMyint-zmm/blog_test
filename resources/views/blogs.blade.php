<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Blog Posts</h1>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="text-end mb-3">
                    <a href="/addBlogPage" class="btn btn-light text-dark">
                        <div>
                            <i class="fa-solid fa-plus me-2"></i>Add
                            Blog
                        </div>
                    </a>
                </div>
                @foreach ($blogs as $blog)
                    <div class="card bg-light mb-3 ">



                        <div class="card-body">
                            <article class="">

                                <h3 class="text-center">{{ $blog->title }}</h3>
                                <h5>Author Name - {{ $blog->username }}</h5>
                                <p class="fst-italic">
                                    published at - {{ $blog->created_at->diffForHumans() }}
                                </p>

                                <p class="text-muted">{{ Str::words($blog->body, 20, '.....') }}</p>

                            </article>
                            <div class="float-end">
                                <a href="{{ route('blogs#blogDelete', $blog->id) }}"
                                    class="btn bg-danger shadow me-2">Delete</a>

                                <a href="{{ route('blogs#editBlog', $blog->id) }}"
                                    class="btn bg-warning shadow me-2">Edit</a>

                                <a class="btn bg-secondary shadow me-2" href="/blogs/{{ $blog->id }}">View
                                    More</a>
                            </div>
                        </div>

                    </div>
                @endforeach
                <div>
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>

    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>

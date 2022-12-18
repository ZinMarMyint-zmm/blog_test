<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add A Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="text-center mb-3">
                    <h2>Add New Blog</h2>
                </div>
                <div class="my-3"><a href="/" class="text-dark text-decoration-none ms-3">
                        <i class="fa-solid fa-arrow-left me-2"></i>Back</a></div>
                <form action="{{ route('blogs#addBlog') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Blog Title"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Author Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Author Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Body</label>
                        <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Enter Blog Body" required></textarea>
                    </div>
                    <div class="">
                        <input type="submit" value="Add" class="btn bg-secondary float-end mt-3">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>

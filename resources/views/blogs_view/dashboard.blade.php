@include('blogs_view.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD</title>
</head>
<body  class="container mt-4">
    <form method="post" action="{{route('blogs_view.saveBlog')}}">
        @csrf
        @method('post')
        <fieldset>
          <div>
            <label for="author" class="form-label mt-4">Author</label>
            <input class="form-control" id="author" name="author" placeholder="Author">
          </div>
          <div>
            <label for="title" class="form-label mt-4">Title</label>
            <input class="form-control" id="title" name="title" placeholder="Title">
          </div>
          <div>
            <label for="subtitle" class="form-label mt-4">Subtitle</label>
            <input class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle">
          </div>
          <div>
            <label for="blogContent" class="form-label mt-4">Blog Content</label>
            <textarea class="form-control" id="blogContent" name="blog_content" placeholder="Type your awesome blog here..." rows="3"></textarea>
          </div>

          <div class="mt-4">
            <input type="submit" value="PUBLISH" class="btn btn-primary"/>
          </div>
        </fieldset>
      </form>

      <button type="button" onclick="window.location='{{ route('blogs_view.viewBlogs') }}'" class="btn btn-outline-primary">View Blogs</button>
</body>
</html>

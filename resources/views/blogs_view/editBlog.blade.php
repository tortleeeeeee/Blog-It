@include('blogs_view.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT BLOG</title>
</head>
<body>
    <form method="post" action="{{ route('blogs_view.updateBlog', ['blog'=>$blog])}}">
        @csrf
        @method('put')
        <fieldset>
          <div>
            <label for="author" class="form-label mt-4">Author</label>
            <input class="form-control" id="author" name="author" value="{{ $blog->author }}" placeholder="Author">
          </div>
          <div>
            <label for="title" class="form-label mt-4">Title</label>
            <input class="form-control" id="title" name="title" value="{{ $blog->title }}" placeholder="Title">
          </div>
          <div>
            <label for="subtitle" class="form-label mt-4">Subtitle</label>
            <input class="form-control" id="subtitle" name="subtitle" value="{{ $blog->subtitle }}" placeholder="Subtitle">
          </div>
          <div>
            <label for="blogContent" class="form-label mt-4">Blog Content</label>
            <textarea class="form-control" id="blogContent" name="blog_content" placeholder="Type your awesome blog here..." rows="3">{{ $blog->blog_content }}</textarea>
          </div>

          <div class="mt-4">
            <input type="submit" value="UPDATE" class="btn btn-primary"/>
          </div>
        </fieldset>
      </form>
</body>
</html>

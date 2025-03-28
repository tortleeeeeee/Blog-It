@include('blogs_view.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blogs</title>
</head>
<body class="container mt-4">
    <table class="table table-hover">
        <thead>
          <tr class="table-dark">
            <td>Title</td>
            <td>Author</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </thead>

        <tbody>
          @foreach ($blogs as $blog)
            <tr class="table-light">
              <td>{{ $blog->title }}</td>
              <td>{{ $blog->author }}</td>
              <td>
                <a href="{{ route('blogs_view.editBlog', ['blog'=>$blog])}}">EDIT</a>
              </td>
              <td>
                <form method="post" action="{{ route('blogs_view.deleteBlog', ['blog'=>$blog]) }}">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <button type="button" onclick="window.location='{{ route('blogs_view.dashboard') }}'" class="btn btn-outline-primary">Create New Blog</button>
</body>
</html>

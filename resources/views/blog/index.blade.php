{{ Session::get('message') }}
<h1>My Blog</h1>
<a href="/blog/add">Add a new post</a>
@foreach($blogs as $data)
	<h2><a href="/blog/{{ $data->id }}">{{ $data->title }}</a></h2>
	<p>{{ $data->post }}</p>
	<a href="/blog/edit/{{ $data->id }}">Edit Post</a>
	<form action="/blog/delete/{{ $data->id }}" method="post">
		<input type="hidden" name="_method" value="delete">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="submit" name="name" value="Delete Post">
	</form>
@endforeach
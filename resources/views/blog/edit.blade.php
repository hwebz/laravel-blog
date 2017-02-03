<h1>Edit Data Post</h1>
<form action="/blog/edit/{{ $detailpage->id }}" class="" method="post">
	<input type="text" name="title" value="{{ $detailpage->title }}" placeholder="Titles">
	{{ ($errors->has('title')) ? $errors->first('title') : ''  }}<br />
	<textarea name="post" cols="40" rows="8" placeholder="Descriptions">{{ $detailpage->post }}</textarea>
	{{ ($errors->has('post')) ? $errors->first('post') : '' }}<br />
	<input type="hidden" name="_method" value="put">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Edit Post">
</form>
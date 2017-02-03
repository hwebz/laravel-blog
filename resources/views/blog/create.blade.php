<h1>Add new Blog Post</h1>
<form action="/blog" class="" method="post">
	<input type="text" name="title" value="" placeholder="Titles">
	{{ ($errors->has('title')) ? $errors->first('title') : ''  }}<br />
	<textarea name="post" cols="40" rows="8" placeholder="Descriptions"></textarea>
	{{ ($errors->has('post')) ? $errors->first('post') : '' }}<br />
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="Post">
</form>
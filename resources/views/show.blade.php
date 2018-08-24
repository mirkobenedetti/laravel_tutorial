<style>
th, td {
  padding: 10px;
}
th {
  text-align: left;
}
</style>

<h1>All Articles</h1>

@if (!empty($articles))
<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Body</th>
      <th>Url</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
  </thead>
  <tbody>
	@foreach ($articles as $article)
  <tr>
    <td>{{ $article->title }}</td>
    <td>{{ $article->author }}</td>
    <td>{{ str_limit($article->body, 20) }}...</td>
    <td>
    @if ($article->url != "")
      <a href="http://{{ $article->url }}">Visit Url</a>
    @else
      Void Field
    @endif
    </td>
    <td><a href="delete-article/{{ $article->id }}">Delete</a></td>
    <td><a href="update-article/{{ $article->id }}">Update</a></td>
  </tr>
  @endforeach
  </tbody>
</table>
@else
  <p>No article found.</p>
@endif

<br/>
<a href="/create-article">Create New</a>
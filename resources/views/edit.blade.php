<style>
th, td {
    padding: 10px;
}

th {
    text-align: right;
}
</style>

<h1>Create or Update Article:</h1>

{{ Form::open(['url' => Request::url()]) }}

<table>
  <tbody>
    <tr>
      <th>Title:</th>
      <td>{{ Form::text('title', $article->title ?? '', array('required' => 'required')) }}</td>
    </tr>
    <tr>
      <th>Author:</th>
      <td>{{ Form::text('author', $article->author ?? '', array('required' => 'required')) }}</td>
    </tr>
    <tr>
      <th>Article Body:</th>
      <td>{{ Form::textarea('body', $article->body ?? '', array('required' => 'required')) }}</td>
    </tr>
    <tr>
      <th>Homepage:</th>
      <td>{{ Form::text('url', $article->url ?? '', array('placeholder' => 'www.example.com')) }}</td>
    </tr>
    <tr>
      <th></th>
      <td>{{ Form::submit('Save') }}</td>
    </tr>
  </tbody>
</table>

{{ Form::close() }}
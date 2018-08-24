<style>
th, td {
  padding: 10px;
}
th {
  text-align: right;
}
</style>

<h1>Article Created or Modified</h1>

<table>
  <tbody>
    <tr>
      <th>Title:</th>
    <td>{{ $article->title }}</td>
    </tr>
    <tr>
      <th>Author:</th>
      <td>{{ $article->author }}</td>
    </tr>
    <tr>
      <th>Article Body:</th>
      <td>{{ $article->body }}</td>
    </tr>
    <tr>
      <th>Homepage:</th>
      <td>{{ $article->url }}</td>
    </tr>
  </tbody>
</table>

<br/>
<a href="/show-articles">View All</a> -
<a href="/update-article/{{ $article->id }}">Modify</a>
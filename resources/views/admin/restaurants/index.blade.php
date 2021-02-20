<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Criado em</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($restaurants as $r)
        <tr>
          <td>{{$r->id}}</td>
          <td>{{$r->name}}</td>
          <td>{{$r->created_at}}</td>
          <td><a href="{{route('restaurant.edit', $r->id)}}">Editar</a>
            <a href="{{route('restaurant.delete', $r->id)}}">Excluir</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
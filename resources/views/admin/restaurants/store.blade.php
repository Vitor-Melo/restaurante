<h1>Inserção de restaurante</h1>

<div>
  <form action="{{route('restaurant.store')}}" method="post">
    {{csrf_field()}}
    <label for="name">Nome do Restaurante</label><br />
    <input type="text" name="name" id="name"><br />
    <label for="address">Endereço</label><br />
    <input type="text" name="address" id="address"><br />
    <label for="description">Descreva o restaurante</label><br />
    <textarea name="description" id="description" cols="30" rows="5"></textarea><br />
    <input type="submit" value="Cadastrar">
  </form>
</div>
<form action="{{route('contatos.store')}}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" >
    <div>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <label for="endereco">Endereço</label>
    <input type="text" name="endereco" id="endereco">
    <button>Salvar</button>
</form>
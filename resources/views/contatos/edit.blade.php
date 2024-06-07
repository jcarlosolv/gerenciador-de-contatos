<x-layout>
    <form action="{{route('contatos.update', $contato->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$contato->nome}}">
        <div>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" value="{{$contato->telefone}}">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$contato->email}}">
        </div>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="{{$contato->endereco}}">
        <button>Salvar</button>
    </form>
</x-layout>
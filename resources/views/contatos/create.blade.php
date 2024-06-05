<x-layout>
<main>
    <form action="{{route('contatos.store')}}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" >
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="(12) 3456-7890" >
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" placeholder="nomea@dominio.com">
        <button>ADD</button>
    </form>
</main>
</x-layout>
<x-layout>
    <main>
        <section>
            <form action="{{route('contatos.store')}}" method="post">
                @csrf
                <label for="nome">Nome</label>
                <input type="text">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(12) 3456-7890">
                <button>ADD</button>
            </form>
        </section>
        <section class="lista-contatos">
            <ul>
                @foreach($contatos as $contato)
                <li><a href="{{route('contatos.edit', $contato->id)}}">{{$contato->nome}}</a><span>{{$contato->telefone}}</span></li>
                @endforeach
            </ul>
        </section>
    </main>
</x-layout>
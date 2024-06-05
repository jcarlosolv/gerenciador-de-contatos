<x-layout>
    <main>
        <section>
            <a href="{{route('contatos.create')}}">ADICIONAR</a>
        </section>
        <section class="lista-contatos">
            <ul>
                @foreach($contatos as $contato)
                <li>
                    <a href="{{route('contatos.edit', $contato->id)}}">
                        <span>{{$contato->nome}}</span><br>
                        <span>{{$contato->telefone}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
</x-layout>
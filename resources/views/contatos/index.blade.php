<x-layout>
        <section class="menu">
            <a href="{{route('contatos.create')}}">ADICIONAR</a>
        </section>
        <section class="lista-contatos">
            <ul>
                @foreach($contatos as $contato)
                <a href="{{route('contatos.edit', $contato->id)}}">
                    <li>
                        <span class="nome">{{$contato->nome}}</span>
                        <span class="telefone">{{$contato->telefone}}</span>
                    </li>
                </a>
                @endforeach
            </ul>
        </section>
</x-layout>
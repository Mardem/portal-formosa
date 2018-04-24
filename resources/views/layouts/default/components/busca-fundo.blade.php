<section class="pesquisa-categoria">
    <div class="container">
        <h5 class="display-4">Busque por categorias</h5>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi cupiditate deserunt dolore
            explicabo facilis fuga fugiat id inventore maiores molestiae, nobis omnis porro, quibusdam reiciendis,
            similique sit tempora! Eligendi.
        </p>
        <div align="center">
            <input type="text" id="jetsSearch" class="pesquisa-categoria-input"
                   placeholder=" Digite o que você procura">
            {{-- --}}
        </div>
        <br>

        @php
            $categorias = \App\Models\Categoria::where('local', '=', 0)->get();
        @endphp
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">Todas categorias do site</p>
                <ul class="lista-categorias search-category-pf">
                    @foreach($categorias as $categoria)
                        <li>• &nbsp;&nbsp;<a href="">{{ $categoria->nome }}</a>&nbsp;&nbsp;•</li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
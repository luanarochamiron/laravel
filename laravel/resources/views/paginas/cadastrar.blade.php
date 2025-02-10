<x-layout titulo="Cadastrar">
    <form action="" method="GET">
        @csrf <!-- Abrir as portas do servidor -->
        <label name="dataCompromisso">Data Compromisso</label>
        <input type="date" name="dataEvento">
        <br><br>

        <label name="descricao">Descrição</label>
        <textarea type="text" name="descricaoEvento"></textarea>
        <br><br>

        <button type="submit">Salvar</button>
    </form>
    <a hfer="/"><button>Voltar</button></a>

</x-layout>
<x-layout title="Criar produto">
    <form action="{{route('produtos.store')}}" method="POST">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="">Descriacao</label>
        <input type="text" name="decricao" id="decricao">
        <label for="">Imagem</label>
        <input type="text" name="imagem" id="imagem">
        <label for="">Valor</label>
        <input type="text" name="valor" id="valor">
        <button type="submit">Enviar produto</button>
    </form>
    @csrf
</x-layout>

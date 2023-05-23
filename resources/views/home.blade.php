@extends('layouts.app')

@include('partials.header')
@section('content')
    <section class="d-flex p-5">
        <div class="row">
        <div class="col">
            <img  src="{{Vite::asset('resources/image/il-padrino.webp') }} " alt="">
        </div>
        <div class="col-6">
            <h1>Benvenuto</h1>
            <p>Nel nostro sito web dedicato ai film! Siamo entusiasti di offrirvi una vasta selezione di contenuti cinematografici che vi terranno incollati allo schermo. Che tu sia un appassionato di azione, avventura, commedia, dramma o di qualsiasi altro genere, siamo qui per soddisfare i tuoi gusti cinematografici.
                Ogni film nel nostro catalogo è accompagnato da dettagli informativi, come immagini, titolo, titolo originale, nazionalità e data di uscita. Inoltre, forniamo recensioni dei film e valutazioni per aiutarti a prendere decisioni informate sulla tua prossima visione.
            </p>
            <strong>Siediti, rilassati e lasciati trasportare nell'affascinante mondo del cinema attraverso le nostre pagine. Buona visione!</strong>
            <div class="p-5 fs-4">
            <a href="{{ route('movies.index') }}">Vai alla lista dei movie</a>
            </div>
        </div>
        <div class="col">
            <img src="{{Vite::asset('resources/image/ET.jpg') }} " alt="">
        </div>
    </div>
    </section>
@endsection
<style lang="scss">
p {
    font-size: 1.5rem
}
img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
strong{
    font-size: 1.2rem
}
</style>


<x-layout>
    <div class="container">
        <div class="row">
            @if (count($students) > 0)
            @foreach ($students as $student)
                <div class="col-12 col-md-3">
                  <x-card
                  cardImg="{{$student ['Img']}}"
                  cardName="{{$student ['Name']}}"
                  cardSurname="{{$student ['Surname']}}"
                  cardAge="{{$student ['Age']}}"
                  cardLanguage="{{$student ['Language']}}"
                  cardCity="{{$student ['City']}}"
                  cardId="{{$student ['id']}}"
                />
                </div>
            @endforeach
            @else
            <div class="alert alert-info" role="alert">
                <p class="lead">Nessun risultato trovato per la chiave di ricerca: {{ $searchKey }}</p>
            </div>
            @endif
        </div>
    </div>








</x-layout>
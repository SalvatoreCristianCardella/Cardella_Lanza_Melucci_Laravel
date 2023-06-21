<x-layout>
    <div class="container">
        <div class="row">
              @foreach ($students as $student )
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
        </div>
    </div>
  </x-layout>

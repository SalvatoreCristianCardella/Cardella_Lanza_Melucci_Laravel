

<div class="card" style="width: 18rem;">
    <img src="{{$cardImg}}" class="card-img-top" style="height:300px" alt="{{$cardImg}}">
    <div class="card-body">
      <h5 class="card-title">{{$cardName}}</h5>
      <h5 class="card-title">{{$cardSurname}}</h5>
      <p class="card-text">{{$cardAge}}</p>
      <p class="card-text">{{$cardCity}}</p>
      <a href="{{route('studentByLanguage' , ['Language' => $cardLanguage])}}">{{$cardLanguage}}</a>
    </div>
</div>


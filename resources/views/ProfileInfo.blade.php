@extends('Layout')
@section('ProfileInfo')
<form action="">
<img class='userIcon' src="{{ asset('images/UserIcon.png') }}" alt="UserIcon">

<label for="fName">Vardas</label>
<input class='profileInput' name='fName' type="text">


<label for="lName">Pavardė</label>
<input class='profileInput' name='lName' type="text">

<label for="description">Aprašymas</label>
<textarea id="myTextarea" name="comments" rows="4" cols="50">
  
</textarea>

<button>Patvirtinti informacija</button>

</form>
@endsection
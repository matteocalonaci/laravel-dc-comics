@extends('layouts.app')

@section('content')
<form >
<div>
        <label class="form-label" style="width: 10rem">Titolo:</label>
        <input type="text" id="title" placeholder="Titolo">
</div>

<div>
        <label class="form-label" style="width: 10rem">Descrizione:</label>
        <input type="text" id="description" placeholder="Descrizione">
</div>

<div>
        <label class="form-label" style="width: 10rem">Prezzo:</label>
        <input type="text" id="price" placeholder="Prezzo">
</div>
<div>
        <label class="form-label" style="width: 10rem">Serie:</label>
        <input type="text" id="series" placeholder="Serie">
</div>

<div>
        <label class="form-label" style="width: 10rem">Data:</label>
        <input type="text" id="sale_date" placeholder="Data">
</div>

<div>
        <label class="form-label" style="width: 10rem">Tipo:</label>
        <input type="text" id="type" placeholder="Tipo">
</div>

<div>
        <label class="form-label" style="width: 10rem">Artisti:</label>
        <input type="text" id="artist" placeholder="Artisti">

</div>
<div>
        <label class="form-label" style="width: 10rem">Scrittori:</label>
        <input type="text" id="writers" placeholder="Scrittori">
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

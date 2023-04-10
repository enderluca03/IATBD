<form name="add-post" id="add-post" method="post" action="{{url('adding/addPost')}}">
    @csrf
    <label for="address">Adres</label>
    <input type="text" id="address" name="address" required />
    
    <label for="town">Stad</label>
    <input type="text" id="town" name="town" required />

    <input type="submit" id="submit" value="Klaar">
</form>


<form name="add-post" id="add-post" method="post" enctype="multipart/form-data" action="{{url('adding/addPost')}}">
    @csrf
    <label for="address">Adres</label>
    <input type="text" id="address" name="address" required />
    
    <label for="town">Stad</label>
    <input type="text" id="town" name="town" required />

    <label for="pics">Foto*</label>
    <label for="pics">*Maximaal 2 mb</label>
    <input type="file" id="pics" name="pics">


    <input type="submit" id="submit" value="Klaar">
</form>


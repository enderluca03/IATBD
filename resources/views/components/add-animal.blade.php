<form name="add-animal" id="add-animal" method="post" action="{{url('adding/addAnimal')}}">
    @csrf
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" required />
    
    <label for="age">Leeftijd</label>
    <input type="number" id="age" name="age" required />

    <label for="species">Type dier</label>
    <select id="species" name="species" required>
        <option value="Dog">Hond</option>
        <option value="Cat">Kat</option>
        <option value="Fish">Vis</option>
        <option value="Bird">Vogel</option>
        <option value="Guinea Pig">Cavia</option>
    </select>

    <label for="note">Opmerkingen</label>
    <textarea name="note" id="note" cols="30" rows="10"></textarea>

    <button type="submit">Verstuur</button>
</form>


<form>
    <label for="name">Naam</label>
    <input type="text" id="name" required />
    
    <label for="age">Leeftijd</label>
    <input type="number" id="age" required />

    <label for="type">Type dier</label>
    <select id="type" required>
        <option value="Dog">Hond</option>
        <option value="Cat">Kat</option>
        <option value="Fish">Vis</option>
        <option value="Bird">Vogel</option>
        <option value="Guinea Pig">Cavia</option>
    </select>

    <label for="note">Opmerkingen</label>
    <textarea name="note" id="note" cols="30" rows="10"></textarea>

    <input type="submit" id="submit" value="Klaar">
</form>


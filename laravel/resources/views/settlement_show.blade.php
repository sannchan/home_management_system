<form action="/settlement" method="get">
    @csrf
    <label for="month">Month:</label><br>
    <input type="number" id="month" name="month" min="1" max="12"><br>
    <input type="submit" value="Submit">
</form>
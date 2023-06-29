<!-- resources/views/item_create.blade.php -->
<form action="/item" method="post">
    @csrf
    <label for="name">Item Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price"><br>
    <label for="buyer_id">Buyer ID:</label><br>
    <input type="number" id="buyer_id" name="buyer_id"><br>
    <input type="checkbox" id="is_shared" name="is_shared">
    <label for="is_shared">Is Shared?</label><br>
    <input type="submit" value="Submit">
</form>
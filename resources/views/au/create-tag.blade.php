<!DOCTYPE html>
<html>
<body>



<form action="{{ route('admin.tag.create') }}" method="POST">
    @csrf
    <input name="slug" type="text" >
  <label for="cars">Choose a car:</label>
  <select name="name" id="cars" multiple>
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>



</body>
</html>

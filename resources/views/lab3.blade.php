<html>
<body>
<form method="POST" action="{{ route('ab.page.post') }}">
    @csrf
    A too oruul: <input type="text" name="A"> 
    B too oruul: <input type="text" name="B"> 
    <p>Too yavuulah deer dar</p>
    <button type="submit">Yavuulah</button>
</form>

</body>
</html>
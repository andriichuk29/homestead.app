<form action="{{ route('upload') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="user[login]" value=""/>
    <input type="password" name="user[password]" value=""/>
    <input type="submit" value="Login"/>
</form>
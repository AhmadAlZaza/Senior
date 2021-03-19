<html>

<body>
    <form action="{{ url('/signinn')}}" method="POST">
        @csrf
    username &nbsp; <input type="text" name="username" id=""> <br>
    password &nbsp; <input type="text" name="password" id=""> <br><br>
     <input type="submit" value="submit">
</form>
    </body>
</html>
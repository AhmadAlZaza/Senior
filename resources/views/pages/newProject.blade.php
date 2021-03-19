<html>

<body>
    
    <form action="{{url('/new')}}" method="POST">
        @csrf
    name &nbsp;&nbsp;<input type="text" name="name" id=""><br>
    location &nbsp;&nbsp;<input type="text" name="location" id=""><br>
    employee &nbsp;&nbsp;<input type="text" name="employee" id=""><br>
consaltant &nbsp;    
<select name="consaltant" id="">
        @foreach ($cons as $item)
            <option value="{{$item->ID}}">{{$item->name}}</option>
        @endforeach
    </select><br>
    contractor &nbsp;<select name="contractor" id="">
        @foreach ($contr as $item )
            <option value="{{$item->ID}}">{{$item->name}}</option>
        @endforeach
    </select><br>
    designer &nbsp;<select name="designer" id="">
        @foreach ($des as $item )
        <option value="{{$item->ID}}">{{$item->name}}</option>    
        @endforeach
    </select><br>
    contact number &nbsp;&nbsp;<input type="text" name="contact" id=""><br>
    start date  &nbsp;&nbsp;<input type="date" name="start" id=""><br>
    duration&nbsp;&nbsp;<input type="text" name="duration" id=""><br>
    finish date &nbsp;&nbsp;<input type="date" name="end" id=""><br>
    sum &nbsp;&nbsp;<input type="text" name="sum" id=""><br>
    kick of meeting &nbsp;&nbsp;<input type="text" name="kick" id=""><br>
    description &nbsp;<textarea name="desc" id="" cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="submit">
</form>
</body>
</html>
<html>
    <body>
    @foreach ($data as $item)
        Project Name : {{$item->projectName}}<br>
        Location : {{$item->location}}<br>
        Employee :  {{$item->employee}}<br>
        Consultant : {{$item->ConsuName}}<br>
        Contractor : {{$item->ContraName}}<br>
        Designer : {{$item->DesignName}}<br>
        Contact Number : {{$item->contact_number}}<br>
        Start Date : {{$item->start_date}}<br>
        Duration of project {{$item->duration}}<br>
        Finish Date : {{$item->finish_date}}<br>
        Sum : {{$item->Sum}}<br>
        Kick of meeting : {{$item->kick_of_meeting}}<br>
        Description : {{$item->description}}<br>
    @endforeach
    </body>
</html>
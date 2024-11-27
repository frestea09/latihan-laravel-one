<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
     @while ($iteration < 3)
        @isset($data[$iteration])
            <p>{{$data[$iteration]}}</p>
            @php
                $iteration ++;
            @endphp
        @endisset
    
     @endwhile
</div>

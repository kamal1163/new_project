<!-- @if($demo == '')
                                    {{'empty'}}
                                @elseif($demo == 'Welcome')
                                    {!!$demo!!}
                                @else
                               {{"no value return"}}
                                @endif -->

                                <!-- @unless($name == 'Welcome')
                                {{"yes"}}
                                @endunless -->

                                <!-- @isset($name)
                                {{"variable is declared"}}
                                @endisset -->
                              
                                <!-- @for($i=1;$i<=10;$i++)
                                {{$i}}
                                @endfor -->

                                <!-- @php 
                                $i=1;
                                @endphp

                                @while($i<=10)
                                {{$i}}
                                @php $i++;@endphp

                                @endwhile -->

                                <!-- @php
                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola");
                                @endphp
                                <select>
                                @foreach ($countries as $key => $country)
                                    <option value="{{$key}}">{{$country}}</option>
                                @endforeach
                                </select> -->

                               <!-- @for($i=1;$i<=10;$i++)
                                    @if($i==5
                                    )
                                       @break;    ;
                                    @endif
                                    {{$i}}
                                @endfor -->
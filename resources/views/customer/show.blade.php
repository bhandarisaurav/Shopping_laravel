{{--<a href="{{route('customer.index', ['id'=>$customer->customer_id]) }}"> {{$customer->first_name}}</a>--}}
<a href="{{route('customer.index')}}">View All Data</a><br>
{{$customer->first_name}}
{{$customer->last_name}}
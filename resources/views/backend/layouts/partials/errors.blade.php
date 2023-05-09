



@if(session('message'))

<h3 class='text-center'>{{session('message')}}</h3>

@endif



@if(session('error'))

<h3 class='text-center'>{{session('error')}}</h3>

@endif
<div>
@foreach($data as $d)
<li>
	
{{ $d->name }}

</li>
@endforeach

</div>

<div>


	{{ $d->links() }}


</div>


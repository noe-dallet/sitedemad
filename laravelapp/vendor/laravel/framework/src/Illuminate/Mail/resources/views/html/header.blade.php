<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://localhost:8000/assets/img/48373115_265202887505737_4703183849922756608_n.png" class="logo" alt="Adémad Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
